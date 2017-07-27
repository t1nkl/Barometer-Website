<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\PartnersRequest as StoreRequest;
use App\Http\Requests\PartnersRequest as UpdateRequest;

class PartnersCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Partners");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/partners');
        $this->crud->setEntityNameStrings('партнер', 'партнеры');

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

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'title',
                                'label' => 'Название',
                                'type' => 'text',
                                'count_down' => 100,
                                'attributes' => ['maxlength' => 100],
                            ]);
        $this->crud->addField([
                                'name' => 'url',
                                'label' => 'URL',
                                'type' => 'text',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                            ]);
        $this->crud->addField([
                                'name' => 'image',
                                'label' => 'Изображение',
                                'type' => 'image',
                                'crop' => true,
                                'aspect_ratio' => 1,
                                'upload' => true,
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
