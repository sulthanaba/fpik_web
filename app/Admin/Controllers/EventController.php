<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\EventModel;

class EventController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Acara';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new EventModel);

        $grid->disableRowSelector();
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', $row->number + 1);
        });
        $grid->number('No');
        $grid->column('id','ID');
        $grid->column('content','Konten');
        $grid->column('link','Link');
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->disableExport();
        $grid->disableFilter();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(EventModel::findOrFail($id));

        $show->field('content',('Konten'));
        $show->field('link',('Link'));     
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
        $form = new Form(new EventModel);

        $form->file('content',('Konten'));
        $form->url('link',('Link'));

        return $form;
    }
}
