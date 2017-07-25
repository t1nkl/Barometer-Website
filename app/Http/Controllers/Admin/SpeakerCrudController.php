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
                                'label' => 'Status',
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
        
//        $this->crud->addField([
//                                'name' => 'url',
//                                'label' => 'URL',
//                                'type' => 'text',
//                                'placeholder' => 'Ваш текст тут',
//                                'count_down' => 70,
//                                'attributes' => ['maxlength' => 70],
//                                'tab' => 'Соц. сети',
//                            ]);
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
//        $this->crud->addField([
//                                'name' => 'twit',
//                                'label' => 'Twitter',
//                                'type' => 'text',
//                                'placeholder' => 'Ваш текст тут',
//                                'count_down' => 70,
//                                'attributes' => ['maxlength' => 70],
//                                'tab' => 'Соц. сети',
//                            ]);

        $this->crud->enableAjaxTable();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']);
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though: 
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable(); 

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();

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
