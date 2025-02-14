<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Hall;

class HallController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Hall';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hall());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('price', __('Price'));
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
        $show = new Show(Hall::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('price', __('Price'));
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
        $form = new Form(new Hall());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->textarea('address', __('Address'));
        $form->phonenumber('phone', __('Phone'));
        $form->decimal('price', __('Price'));
        $form->text('image_path', __('Image path'));

        return $form;
    }
}
