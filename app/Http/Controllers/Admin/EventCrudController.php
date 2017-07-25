<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\EventRequest as StoreRequest;
use App\Http\Requests\EventRequest as UpdateRequest;

use App\Http\Requests\DropzoneRequest as DropzoneRequest;

class EventCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Event");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/event');
        $this->crud->setEntityNameStrings('о мероприятии', 'о мероприятии');

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
                                'name' => 'content',
                                'label' => 'Контент',
                                'type' => 'tinymce',
                            ]);
        $this->crud->addField([
                                'name' => 'photos',
                                'label' => 'Изображения',
                                'type' => 'dropzone',
                                'prefix' => 'uploads',
                                'upload-url' => '/' . config('backpack.base.route_prefix', 'admin') . '/event-dropzone',
                            ]);

        $this->crud->denyAccess(['create', 'delete']);

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
        if (empty ($request->get('photos'))) {
            $this->crud->update(\Request::get($this->crud->model->getKeyName()), ['photos' => '[]']);
        }
        return parent::updateCrud();
    }

    public function handleDropzoneUpload(DropzoneRequest $request)
    {
        $disk = "uploads";
        $destination_path = "EVENT_Gallery";
        $file = $request->file('file');
        try
        {
            $image = \Image::make($file)->resize(null, 310, function ($constraint) {
                $constraint->aspectRatio();
            });
            $filename = md5($file->getClientOriginalName().time()).'.png';
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            return response()->json(['success' => true, 'filename' => $destination_path . '/' . $filename]);
        }
        catch (\Exception $e)
        {
            if (empty ($image)) {
                return response('Not a valid image type', 412);
            } else {
                return response('Unknown error', 412);
            }
        }
    }

}
