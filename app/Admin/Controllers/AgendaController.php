<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\AgendaModel;

class AgendaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Agenda';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AgendaModel);

        $grid->disableRowSelector();
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', $row->number + 1);
        });
        $grid->number('No');
        $grid->column('id','ID');
        $grid->column('title_agenda','Judul');
        $grid->column('desc_agenda','Deskripsi');
        $grid->column('date_agenda','Tanggal Mulai');
        $grid->column('date_agenda_until','Tanggal Selesai');
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
        $show = new Show(AgendaModel::findOrFail($id));

        $show->field('title_agenda',('Judul'));
        $show->field('desc_agenda',('Deskripsi'));
        $show->field('date_agenda',('Tanggal Mulai'));
        $show->field('date_agenda_until',('Tanggal Selesai'));      
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
        $form = new Form(new AgendaModel);

        $form->text('title_agenda',('Judul'));
        $form->textarea('Desc_agenda',('Deskripsi'));
        $form->date('date_agenda',('Tanggal Mulai'));
        $form->date('date_agenda_until',('Tanggal Selesai'));

        return $form;
    }
}
