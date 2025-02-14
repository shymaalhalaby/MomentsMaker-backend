<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Image;

class ImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Image';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Image());

        $grid->column('id', __('Id'));
        $grid->column('file_name', __('File name'));
        $grid->column('file_path', __('File path'));
        $grid->column('imageable_id', __('Imageable id'));
        $grid->column('imageable_type', __('Imageable type'));
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
        $show = new Show(Image::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('file_name', __('File name'));
        $show->field('file_path', __('File path'));
        $show->field('imageable_id', __('Imageable id'));
        $show->field('imageable_type', __('Imageable type'));
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
        $form = new Form(new Image());

        $form->text('file_name', __('File name'));
        $form->text('file_path', __('File path'));
        $form->number('imageable_id', __('Imageable id'));
        $form->text('imageable_type', __('Imageable type'));

        return $form;
    }
}
