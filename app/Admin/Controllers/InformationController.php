<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\InformationModel;

class InformationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Informasi';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new InformationModel);

        $grid->disableRowSelector();
        $grid->rows(function (Grid\Row $row) {
            $row->column('number', $row->number + 1);
        });
        $grid->number('No');
        $grid->column('id','ID');
        $grid->column('title_info','Judul');
        $grid->column('link_info','Link');
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
        $show = new Show(NewsModel::findOrFail($id));

        $show->field('title_info',('Judul'));
        $show->field('link_info',('Link'));     
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
        $form = new Form(new InformationModel);

        $form->text('title_info',('Judul'));
        $form->url('link_info',('Link'));

        return $form;
    }
}
