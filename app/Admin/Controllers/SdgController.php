<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\SdgModel;

class SdgController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SDG';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SdgModel);

        $grid->disableRowSelector();
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', $row->number + 1);
        });
        $grid->number('No');
        $grid->column('id','ID');
        $grid->column('title_sdg','Judul');
        $grid->column('image_sdg','Gambar');
        $grid->column('description_sdg','Deskripsi');
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
        $show = new Show(SdgModel::findOrFail($id));

        $show->field('title_sdg',('Judul'));
        $show->field('photo_sdg',('Gambar'));
        $show->field('description_sdg',('Deskripsi'));      
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
        $form = new Form(new SdgModel);

        $form->text('title_sdg',('Judul'));
        $form->image('image_sdg',('Gambar'));
        $form->textarea('description_sdg',('Deskripsi'));

        return $form;
    }
}
