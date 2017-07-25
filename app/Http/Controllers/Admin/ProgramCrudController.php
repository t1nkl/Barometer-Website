<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProgramRequest as StoreRequest;
use App\Http\Requests\ProgramRequest as UpdateRequest;
use App\Models\Setting;

class ProgramCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Program");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/programs');
        $this->crud->setEntityNameStrings('лекция', 'лекции');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => 'Название',
                            ]);
        $this->crud->addColumn([
                                'name' => 'start_date',
                                'type' => 'date',
                                'label' => 'Время начала',
                            ]);
        $this->crud->addColumn([
                                'name' => 'end_date',
                                'type' => 'date',
                                'label' => 'Время конца',
                            ]);
        $this->crud->addColumn([
                                'name' => 'day',
                                'label' => 'День',
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'title',
                                'label' => 'Название',
                                'type' => 'text',
                                'count_down' => 190,
                                'attributes' => ['maxlength' => 190],
                            ]);
        $this->crud->addField([
                                'name' => 'day',
                                'label' => 'День',
                                'type' => 'select_from_array',
                                'allows_null' => false,
                                'options' => Setting::first()->getDays(),
                            ]);
        $this->crud->addField([
                                'name' => 'start_date',
                                'label' => 'Время начала',
                                'type' => 'time',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'end_date',
                                'label' => 'Время конца',
                                'type' => 'time',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                            ]);
        $this->crud->addField([
                                'label' => 'Спикер',
                                'type' => 'select2',
                                'name' => 'speaker_id',
                                'entity' => 'speaker',
                                'attribute' => 'title',
                                'model' => "App\Models\Speaker",
                            ]);
        $this->crud->addField([
                                'label' => 'Сцена',
                                'type' => 'select',
                                'name' => 'scene_id',
                                'entity' => 'category',
                                'attribute' => 'title',
                                'model' => "App\Models\Scene",
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Контент',
                                'type' => 'textarea',
                                'count_down' => 500,
                                'attributes' => ['maxlength' => 500, 'rows' => 6],
                            ]);
        $this->crud->addField([
                                'name' => 'type',
                                'label' => 'Тип',
                                'type' => 'enum',
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
