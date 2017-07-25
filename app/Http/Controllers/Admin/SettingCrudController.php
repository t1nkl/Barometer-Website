<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\SettingRequest as StoreRequest;
use App\Http\Requests\SettingRequest as UpdateRequest;

use App\Http\Requests\DropzoneRequest as DropzoneRequest;

class SettingCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Setting");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/settings');
        $this->crud->setEntityNameStrings('настройки сайта', 'настройки сайта');

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
        // $this->crud->addField([
        //                         'name' => 'title',
        //                         'label' => 'Название',
        //                         'type' => 'text',
        //                         // 'attributes' => ['readonly' => 'readonly'],
        //                         'tab' => 'Настройки',
        //                     ]);

        $this->crud->addField([
                                'name' => 'place',
                                'label' => 'Место проведения',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 100,
                                'attributes' => ['maxlength' => 100],
                                'tab' => 'Настройки',
                            ]);
        $this->crud->addField([
                                'name' => 'event_date_range', // a unique name for this field
                                'start_name' => 'start_date', // the db column that holds the start_date
                                'end_name' => 'end_date', // the db column that holds the end_date
                                'label' => 'Дата проведения',
                                'type' => 'date_range',
                                // OPTIONALS
                                'start_default' => '2017-01-01 00:00', // default value for start_date
                                'end_default' => '2037-12-31 00:00', // default value for end_date
                                'date_range_options' => [ // options sent to daterangepicker.js
                                    'timePicker' => true,
                                    'locale' => ['format' => 'DD-MM-YYYY HH:mm']
                                ],
                                'tab' => 'Настройки',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-8',
                                ],
                                'hint' => 'Выберите дату и время начала и конца мероприятия',
                            ]);
        $this->crud->addField([
                                'name' => 'email',
                                'label' => 'Емейл',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 50,
                                'attributes' => ['maxlength' => 50],
                                'tab' => 'Настройки',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'phone',
                                'label' => 'Телефон',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 30,
                                'attributes' => ['maxlength' => 30],
                                'tab' => 'Настройки',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-6',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'address',
                                'label' => 'Адрес',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 100,
                                'attributes' => ['maxlength' => 100],
                                'tab' => 'Настройки',
                            ]);
        $this->crud->addField([
                                'name' => 'ticket_url',
                                'label' => 'Ссылка на билеты',
                                'type' => 'text',
                                'tab' => 'Настройки',
                            ]);




        $this->crud->addField([
                                'name' => 'speakers_content',
                                'label' => 'Контент',
                                'type' => 'textarea',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 500,
                                'attributes' => ['maxlength' => 500, 'rows' => 6],
                                'hint' => 'Текст в разделе "Спикеры"',
                                'tab' => 'Спикеры',
                            ]);
        $this->crud->addField([
                                'name' => 'speakers_pdf',
                                'label' => 'Документ PDF',
                                'type' => 'upload',
                                'upload' => true,
                                'tab' => 'Спикеры',
                            ]);




        $this->crud->addField([
                                'name' => 'bars_content',
                                'label' => 'Контент',
                                'type' => 'textarea',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 500,
                                'attributes' => ['maxlength' => 500],
                                'hint' => 'Текст в разделе "Бары"',
                                'tab' => 'Бары',
                            ]);
//        $this->crud->addField([
//                                'name' => 'bars_url',
//                                'label' => 'Неведанная ссылка',
//                                'type' => 'url',
//                                'tab' => 'Бары',
//                            ]);




        $this->crud->addField([
                                'name' => 'location_content',
                                'label' => 'Контент',
                                'type' => 'textarea',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 500,
                                'attributes' => ['maxlength' => 500],
                                'hint' => 'Текст в разделе "Локация"',
                                'tab' => 'Локация',
                            ]);
        $this->crud->addField([
                                'name' => 'location_url',
                                'label' => 'Ссылка на карту',
                                'type' => 'url',
                                'tab' => 'Локация',
                            ]);
        $this->crud->addField([
                                'name' => 'location_photos',
                                'label' => 'Изображения',
                                'type' => 'dropzone',
                                'prefix' => 'uploads',
                                'upload-url' => '/' . config('backpack.base.route_prefix', 'admin') . '/settings-dropzone',
                                'hint' => 'Самоменяющеися картинки',
                                'tab' => 'Локация',
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
                                'name' => 'facebook',
                                'label' => 'Facebook',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                                'tab' => 'Соц. сети',
                            ]);
        $this->crud->addField([
                                'name' => 'instagram',
                                'label' => 'Instagram',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                                'tab' => 'Соц. сети',
                            ]);
        $this->crud->addField([
                                'name' => 'youtube',
                                'label' => 'YouTube',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 70,
                                'attributes' => ['maxlength' => 70],
                                'tab' => 'Соц. сети',
                            ]);
//        $this->crud->addField([
//                                'name' => 'twitter',
//                                'label' => 'Twitter',
//                                'type' => 'text',
//                                'placeholder' => 'Ваш текст тут',
//                                'count_down' => 70,
//                                'attributes' => ['maxlength' => 70],
//                                'tab' => 'Соц. сети',
//                            ]);




        $this->crud->addField([
                                'name' => 'seo_title',
                                'label' => 'Название (title)',
                                'type' => 'text',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 80,
                                'attributes' => ['maxlength' => 80],
                                'tab' => 'Seo',
                            ]);
        $this->crud->addField([
                                'name' => 'seo_description',
                                'label' => 'Описание (description)',
                                'type' => 'textarea',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 155,
                                'attributes' => ['maxlength' => 155],
                                'tab' => 'Seo',
                            ]);
        $this->crud->addField([
                                'name' => 'seo_keywords',
                                'label' => 'Ключевые слова (keywords)',
                                'type' => 'textarea',
                                'placeholder' => 'Ваш текст тут',
                                'count_down' => 180,
                                'attributes' => ['maxlength' => 180],
                                'tab' => 'Seo',
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
        if (empty ($request->get('location_photos'))) {
            $this->crud->update(\Request::get($this->crud->model->getKeyName()), ['location_photos' => '[]']);
        }
        return parent::updateCrud();
    }

    public function handleDropzoneUpload(DropzoneRequest $request)
    {
        $disk = "uploads";
        $destination_path = "SETTINGS/Location";
        $file = $request->file('file');
        try
        {
            $image = \Image::make($file)->resize(500, null, function ($constraint) {
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
