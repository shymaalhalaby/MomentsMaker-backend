<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Register;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    public function update(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->phone = $data['phone'];
        $user->save();
        return response()->json([
            'message' => 'profile updated successfully',
            'user' => $user,
        ]);
    }
    public function delete()
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->delete();
        $response = [
            "message" => "your account deleted successfully",
            "status" => 200,
        ];
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        return response()->json($response);
    }
    public function register(Register $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        if (!$token = auth()->attempt(credentials: ['email' => $user->email, 'password' => $request->password])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(data: [

            'user' => $user,
            'message' => 'User Created Successfully',
        ], status: 200);

    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',

        ]);
    }
}
