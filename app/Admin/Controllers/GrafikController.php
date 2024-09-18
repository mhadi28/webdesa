<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\grafik;

class GrafikController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'grafik';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new grafik());

        $grid->column('id', __('Id'));
        $grid->column('bulan', __('Bulan'));
        $grid->column('tahun', __('Tahun'));
        $grid->column('sum_stunting', __('Sum stunting'));
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
        $show = new Show(grafik::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('bulan', __('Bulan'));
        $show->field('tahun', __('Tahun'));
        $show->field('sum_stunting', __('Sum stunting'));
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
        $form = new Form(new grafik());

        $form->text('bulan', __('Bulan'));
        $form->text('tahun', __('Tahun'));
        $form->text('sum_stunting', __('Sum stunting'));

        return $form;
    }
}
