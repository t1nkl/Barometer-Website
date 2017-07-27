<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;

class ArticleCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Article");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/article');
        $this->crud->setEntityNameStrings('статья', 'статьи');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('title', 1);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => 'Название',
                            ]);
        $this->crud->addColumn([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                            ]);
        $this->crud->addColumn([
                                'name' => 'status',
                                'label' => 'Статус',
                            ]);
        $this->crud->orderBy('rgt');

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'title',
                                'label' => 'Название',
                                'type' => 'text',
                                'count_down' => 190,
                                'attributes' => ['maxlength' => 190],
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-9',
                                ],
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                                'value' => date('Y-m-d'),
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-3',
                                ],
                                'tab' => 'Контент',
                            ], 'create');
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-3',
                                ],
                                'tab' => 'Контент',
                            ], 'update');
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'attributes' => ['readonly' => 'readonly'],
                            ], 'update');
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Контент',
                                'type' => 'ckeditor',
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'name' => 'image',
                                'label' => 'Изображение',
                                'type' => 'upload',
                                'upload' => true,
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'label' => 'Теги',
                                'type' => 'select2_multiple',
                                'name' => 'tags', // the method that defines the relationship in your Model
                                'entity' => 'tags', // the method that defines the relationship in your Model
                                'attribute' => 'title', // foreign key attribute that is shown to user
                                'model' => "App\Models\Tag", // foreign key model
                                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
                                'tab' => 'Контент',
                            ]);

        // ------ SEO FIELDS
        $this->crud->addField([
                                'name' => 'seo_title',
                                'label' => 'Название (title)',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 80,
                                'attributes' => ['maxlength' => 80],
                                'tab' => 'Seo',
                            ]);
        $this->crud->addField([
                                'name' => 'seo_description',
                                'label' => 'Описание (description)',
                                'type' => 'textarea',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 155,
                                'attributes' => ['maxlength' => 155],
                                'tab' => 'Seo',
                            ]);
        $this->crud->addField([
                                'name' => 'seo_keywords',
                                'label' => 'Ключевые слова (keywords)',
                                'type' => 'textarea',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 180,
                                'attributes' => ['maxlength' => 180],
                                'tab' => 'Seo',
                            ]);

        $this->crud->enableAjaxTable();

    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }

}
