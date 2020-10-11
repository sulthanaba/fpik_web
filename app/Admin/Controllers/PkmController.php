<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\PkmModel;

class PkmController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PKM';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PkmModel);

        $grid->disableRowSelector();
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', $row->number + 1);
        });
        $grid->number('No');
        $grid->column('id','ID');
        $grid->column('title_pkm','Judul PKM');
        $grid->column('field','Bidang');
        $grid->column('name','Nama Ketua');
        $grid->column('nim','NIM');
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
        $show = new Show(PkmModel::findOrFail($id));

        $show->field('title_pkm',('Judul'));
        $show->field('field',('Bidang'));
        $show->field('name',('Nama Ketua'));
        $show->field('nim', __('NIM'));     
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
        $form = new Form(new PkmModel);

        $form->text('title_pkm',('Judul'));
        $form->text('field',('Bidang'));
        $form->text('name',('Nama Ketua'));
        $form->text('nim', __('NIM'));

        return $form;
    }
}
