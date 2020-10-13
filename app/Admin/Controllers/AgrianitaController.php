<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\AgrianitaModel;

class AgrianitaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Agrianita';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AgrianitaModel);

        $grid->disableRowSelector();
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', $row->number + 1);
        });
        $grid->number('No');
        $grid->column('id','ID');
        $grid->column('title_agrianita','Judul');
        $grid->column('image_agrianita','Gambar');
        $grid->column('description_agrianita','Deskripsi');
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
        $show = new Show(AgrianitaModel::findOrFail($id));

        $show->field('title_agrianita',('Judul'));
        $show->field('image_agrianita',('Gambar'));
        $show->field('description_agrianita',('Deskripsi'));      
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
        $form = new Form(new AgrianitaModel);

        $form->text('title_agrianita',('Judul'));
        $form->image('image_agrianita',('Gambar'));
        $form->ckeditor('description_agrianita',('Deskripsi'));

        return $form;
    }
}
