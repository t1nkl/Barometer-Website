<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\MemberRequest as StoreRequest;
use App\Http\Requests\MemberRequest as UpdateRequest;

class MemberCrudController extends CrudController {

    public function __construct() {

        parent::__construct();

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Member");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/members');
        $this->crud->setEntityNameStrings('член', 'члены');

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
