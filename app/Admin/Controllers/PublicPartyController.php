<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PublicParty;

class PublicPartyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PublicParty';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PublicParty());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('event_date', __('Event date'));
        $grid->column('event_time', __('Event time'));
        $grid->column('price', __('Price'));
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
        $show = new Show(PublicParty::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('event_date', __('Event date'));
        $show->field('event_time', __('Event time'));
        $show->field('price', __('Price'));
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
        $form = new Form(new PublicParty());

        $form->text('name', __('Name'));
        $form->date('event_date', __('Event date'))->default(date('Y-m-d'));
        $form->time('event_time', __('Event time'))->default(date('H:i:s'));
        $form->decimal('price', __('Price'));

        return $form;
    }
}
