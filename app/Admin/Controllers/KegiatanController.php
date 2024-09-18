<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\kegiatan;

class KegiatanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'kegiatan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new kegiatan());

        $grid->column('id', __('Id'));
        $grid->column('judul', __('Judul'));
        $grid->column('penulis', __('Penulis'));
        $grid->column('gambar', __('Gambar'));
        $grid->column('isi', __('Isi'));
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
        $show = new Show(kegiatan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('judul', __('Judul'));
        $show->field('penulis', __('Penulis'));
        $show->field('gambar', __('Gambar'));
        $show->field('isi', __('Isi'));
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
        $form = new Form(new kegiatan());

        $form->text('judul', __('Judul'));
        $form->text('penulis', __('Penulis'));
        $form->image('gambar', __('Gambar'));
        $form->ckeditor('isi');

        return $form;
    }
}
