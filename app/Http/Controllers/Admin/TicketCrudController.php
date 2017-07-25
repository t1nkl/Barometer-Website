<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\TicketRequest as StoreRequest;
use App\Http\Requests\TicketRequest as UpdateRequest;

class TicketCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Ticket");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/tickets');
        $this->crud->setEntityNameStrings('билет', 'билеты');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'type',
                                'label' => 'Название',
                                'type' => 'enum',
                            ]);
        $this->crud->addColumn([
                                'name' => 'price',
                                'label' => 'Цена',
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'type',
                                'label' => 'Тип',
                                'type' => 'enum',
                            ]);
        $this->crud->addField([
                                'name' => 'price',
                                'label' => 'Цена',
                                'count_down' => 10,
                                'attributes' => ['maxlength' => 10],
                            ]);
        $this->crud->addField([
                                'name' => 'options',
                                'label' => 'Преимущества',
                                'type' => 'table',
                                'entity_singular' => 'option', // used on the "Add X" button
                                'columns' => [
                                    'title' => 'Преимущество',
                                ],
                                'max' => 10, // maximum rows allowed in the table
                                'min' => 3 // minimum rows allowed in the table
                            ]);
        $this->crud->addField([
                                'name' => 'premium_options',
                                'label' => 'Премиум преимущества',
                                'type' => 'table',
                                'entity_singular' => 'option', // used on the "Add X" button
                                'columns' => [
                                    'title' => 'Преимущество',
                                ],
                                'max' => 5, // maximum rows allowed in the table
                                'min' => 0 // minimum rows allowed in the table
                            ]);

        $this->crud->denyAccess(['create', 'delete']);

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
