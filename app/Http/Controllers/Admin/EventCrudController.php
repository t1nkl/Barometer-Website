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
            return response()->json(['success' => true, 'filename' => '/'.$disk.'/'.$destination_path.'/'.$filename]);
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
