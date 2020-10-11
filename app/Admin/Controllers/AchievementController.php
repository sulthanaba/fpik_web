<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\AchievementModel;

class AchievementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Prestasi';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AchievementModel);

        $grid->disableRowSelector();
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', $row->number + 1);
        });
        $grid->number('No');
        $grid->column('id','ID');
        $grid->column('name','Nama');
        $grid->column('year','Tahun');
        $grid->column('achievement','Nama Penghargaan');
        $grid->column('activity','Nama kegiatan');
        $grid->column('scope','Lingkup');
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
        $show = new Show(AchievementModel::findOrFail($id));

        $show->field('name',('Nama'));
        $show->field('year',('Tahun'));
        $show->field('achievement',('Nama Penghargaan'));
        $show->field('activity',('Nama Kegiatan'));
        $show->field('scope',('Lingkup'));      
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
        $form = new Form(new AchievementModel);

        $form->text('name',('Nama'));
        $form->text('year',('Tahun'));
        $form->text('achievement',('Nama Penghargaan'));
        $form->text('activity', __('Nama Kegiatan'));
        $form->text('scope', __('Lingkup'));

        return $form;
    }
}
