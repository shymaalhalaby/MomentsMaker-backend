<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Food;

class FoodController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Food';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Food());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('type', __('Type'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('price per piece', __('Price per piece'));
        $grid->column('image_path', __('Image path'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Food::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('type', __('Type'));
        $show->field('quantity', __('Quantity'));
        $show->field('price per piece', __('Price per piece'));
        $show->field('image_path', __('Image path'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Food());

        $form->text('name', __('Name'));
        $form->text('type', __('Type'));
        $form->number('quantity', __('Quantity'));
        $form->decimal('price per piece', __('Price per piece'));
        $form->text('image_path', __('Image path'));

        return $form;
    }
}
