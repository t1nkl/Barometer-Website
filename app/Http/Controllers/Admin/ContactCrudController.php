<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ContactRequest as StoreRequest;
use App\Http\Requests\ContactRequest as UpdateRequest;

class ContactCrudController extends CrudController {

    public function __construct() {

        parent::__construct();

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Contact");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/contact');
        $this->crud->setEntityNameStrings('обратная связь', 'обратная связь');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'name',
                                'label' => 'Имя',
                            ]);
        $this->crud->addColumn([
                                'name' => 'city',
                                'label' => 'Город',
                            ]);
        $this->crud->addColumn([
                                'name' => 'organization',
                                'label' => 'Организация',
                            ]);
        $this->crud->addColumn([
                                'name' => 'position',
                                'label' => 'Должность',
                            ]);
        $this->crud->addColumn([
                                'name' => 'phone',
                                'label' => 'Телефон',
                            ]);
        $this->crud->addColumn([
                                'name' => 'email',
                                'label' => 'E-mail',
                            ]);
        $this->crud->addColumn([
                                'name' => 'created_at',
                                'label' => 'Время',
                            ]);

        $this->crud->denyAccess(['create', 'update']);
        $this->crud->orderBy('created_at', 'desc');
        $this->crud->enableExportButtons();
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
