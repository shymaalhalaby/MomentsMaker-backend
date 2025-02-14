<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PreviousWork;

class PreviousWorkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PreviousWork';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PreviousWork());

        $grid->column('id', __('Id'));
        $grid->column('file_name', __('File name'));
        $grid->column('file_path', __('File path'));
        $grid->column('previous_workable_id', __('Previous workable id'));
        $grid->column('previous_workable_type', __('Previous workable type'));
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
        $show = new Show(PreviousWork::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('file_name', __('File name'));
        $show->field('file_path', __('File path'));
        $show->field('previous_workable_id', __('Previous workable id'));
        $show->field('previous_workable_type', __('Previous workable type'));
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
        $form = new Form(new PreviousWork());

        $form->text('file_name', __('File name'));
        $form->text('file_path', __('File path'));
        $form->number('previous_workable_id', __('Previous workable id'));
        $form->text('previous_workable_type', __('Previous workable type'));

        return $form;
    }
}
