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
                                'name' => 'youtube_url',
                                'label' => 'Ссылка на видео YouTube',
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
                                'name' => 'location_image',
                                'label' => 'Изображения',
                                'type' => 'image',
                                'upload' => true,
                                'crop' => false,
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
