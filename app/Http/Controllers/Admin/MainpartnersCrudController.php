<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\MainpartnersRequest as StoreRequest;
use App\Http\Requests\MainpartnersRequest as UpdateRequest;

class MainpartnersCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Mainpartners");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/main-partners');
        $this->crud->setEntityNameStrings('главный партнер', 'главные партнеры');

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
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Контент',
                                'type' => 'textarea',
                                'count_down' => 150,
                                'attributes' => ['maxlength' => 150, 'rows' => 3],
                            ]);
        $this->crud->addField([
                                'name' => 'image',
                                'label' => 'Изображение',
                                'type' => 'upload',
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
