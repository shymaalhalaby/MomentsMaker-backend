<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\GraphicDesign;

class GraphicDesignController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'GraphicDesign';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GraphicDesign());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('price per piece', __('Price per piece'));
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
        $show = new Show(GraphicDesign::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('quantity', __('Quantity'));
        $show->field('price per piece', __('Price per piece'));
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
        $form = new Form(new GraphicDesign());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->textarea('address', __('Address'));
        $form->phonenumber('phone', __('Phone'));
        $form->number('quantity', __('Quantity'));
        $form->decimal('price per piece', __('Price per piece'));

        return $form;
    }
}
