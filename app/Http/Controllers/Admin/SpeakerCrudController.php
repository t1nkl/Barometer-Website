<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\SpeakerRequest as StoreRequest;
use App\Http\Requests\SpeakerRequest as UpdateRequest;

class SpeakerCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Speaker");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/speakers');
        $this->crud->setEntityNameStrings('спикер', 'спикеры');

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
                                'name' => 'type',
                                'label' => 'Статус',
                            ]);
        $this->crud->orderBy('rgt');

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'title',
                                'label' => 'Ф. И. О.',
                                'type' => 'text',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'name' => 'descr',
                                'label' => 'Краткое описание',
                                'type' => 'textarea',
                                'count_down' => 60,
                                'attributes' => ['maxlength' => 60, 'rows' => 3],
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Полное описание',
                                'type' => 'textarea',
                                'count_down' => 500,
                                'attributes' => ['maxlength' => 500, 'rows' => 7],
                                'tab' => 'Контент',
                            ]);
        
        $this->crud->addField([
                                'name' => 'position',
                                'label' => 'Должность',
                                'type' => 'text',
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'name' => 'image',
                                'label' => 'Изображение',
                                'type' => 'image',
                                'crop' => true,
                                'aspect_ratio' => 1,
                                'upload' => true,
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'name' => 'type',
                                'label' => 'Тип',
                                'type' => 'enum',
                                'tab' => 'Контент',
                            ]);
        $this->crud->addField([
                                'name' => 'fb',
                                'label' => 'Facebook',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                                'tab' => 'Соц. сети',
                            ]);
        $this->crud->addField([
                                'name' => 'inst',
                                'label' => 'Instagram',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                                'tab' => 'Соц. сети',
                            ]);
        $this->crud->addField([
                                'name' => 'ytube',
                                'label' => 'YouTube',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                                'tab' => 'Соц. сети',
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
