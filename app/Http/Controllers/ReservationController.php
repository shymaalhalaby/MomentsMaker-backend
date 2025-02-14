<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hall;
use App\Models\JoyTeam;
use App\Models\DjCompany;
use App\Models\Restaurant;
use App\Models\PublicParty;
use App\Models\Reservation;
use App\Models\Photographer;
use Illuminate\Http\Request;
use App\Models\DesignCompany;
use App\Models\GraphicDesign;

class ReservationController extends Controller
{
   
    public function store(Request $request, $entity, $id, $eventID)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'number_of_people' => 'required|integer|min:1',
            'quantity' => 'nullable|integer|min:1',
            'address' => 'nullable|string',
            'amount_of_payment' => 'required|numeric|min:0',
        ]);

        $model = $this->resolveModel($entity);
        $entityInstance = $model::findOrFail($id);

        $reservation = Reservation::create([
            'reservationable_id' => $entityInstance->id,
            'reservationable_type' => get_class($entityInstance),
            'event_id' => $eventID,
            'date' => $validated['date'],
            'time' => $validated['time'],
            'number_of_people' => $validated['number_of_people'],
            'quantity' => $validated['quantity'],
            'address' => $validated['address'],
            'amount_of_payment' => $validated['amount_of_payment'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return response()->json([
            'message' => 'Reservation added successfully',
            'reservation' => $reservation,
        ], 201);
    }


    public function getReservationsByEvent($eventID)
    {
        $reservations = Reservation::with('reservationable:id,name')
            ->where('event_id', $eventID)
            ->get()
            ->map(function ($reservation) {
                return [
                    'entity_type' => class_basename($reservation->reservationable_type),
                    'entity_id' => $reservation->reservationable_id,
                    'entity_name' => $reservation->reservationable->name ?? null,
                    'date' => $reservation->date,
                    'time' => $reservation->time,
                    'number_of_people' => $reservation->number_of_people,
                    'amount_of_payment' => $reservation->amount_of_payment,
                ];
            });

        return response()->json([
            'reservations' => $reservations,
        ]);
    }



    public function getReservationDate($entity, $id, $eventID)
    {

        $model = $this->resolveModel($entity);


        $reservation = Reservation::where('reservationable_type', $model)
            ->where('reservationable_id', $id)
            ->where('event_id', $eventID)
            ->first();

        if (!$reservation) {
            return response()->json([
                'message' => 'Reservation not found',
            ], 404);
        }

        return response()->json([
            'message' => 'The Booked Date: ',
            'date' => $reservation->date,
        ]);
    }



    private function resolveModel($entity)
    {
        $models = [
            'Restaurant' => Restaurant::class,
            'PublicParty' => PublicParty::class,
            'GraphicDesign' => GraphicDesign::class,
            'DesignCompany' => DesignCompany::class,
            'DjCompany' => DjCompany::class,
            'JoyTeam' => JoyTeam::class,
            'Photographer' => Photographer::class,
            'Hall' => Hall::class,
        ];

        if (!isset($models[$entity])) {
            abort(404, 'Entity not found.');
        }

        return $models[$entity];
    }




    public function cancel($reservationId)
    {
        
        $reservation = Reservation::find($reservationId);
        if (!$reservation) {
            return response()->json(['error' => 'Reservation not found.'], 404);
        }
        $reservation->delete();

        return response()->json([
            'message' => 'Reservation canceled successfully.',
        ], 200);
    }
}
