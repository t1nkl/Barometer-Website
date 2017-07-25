<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class Setting extends Model
{
    use CrudTrait;
    use HasTranslations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'settings';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['title', 'seo_title', 'seo_description', 'seo_keywords', 'email', 'address', 'phone', 'ticket_url', 'url', 'facebook', 'instagram', 'youtube', 'twitter', 'start_date', 'end_date', 'days', 'place', 'speakers_content', 'speakers_pdf', 'bars_content', 'bars_url', 'location_content', 'location_url', 'location_photos'];
    protected $translatable = ['seo_title', 'seo_description', 'seo_keywords', 'address', 'place', 'speakers_content', 'bars_content', 'location_content'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'location_photos' => 'array',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getDays( $param = null )
    {
        $begin = new \DateTime( $this->start_date );
        $end = new \DateTime( $this->end_date );
//        $end->modify('+1 day');
        $interval = new \DateInterval('P1D');
        $daterange = new \DatePeriod($begin, $interval, $end);
        if( is_null($param) ){
            $i = 1;
            foreach($daterange as $key => $date) {
                $diff_in_days[$date->format('d-m-Y')] = 'День ' . $i++ . ' (' . $date->format('d-m-Y') . ')';
            }
            return $diff_in_days;
        } else {
            $begin = (int)$begin->format('H:i');
            $end = (int)$end->format('H:i');
            $diff_in_hours[] = $begin;
            $diff_in_hours[] = $end;
            return $diff_in_hours;
        }

    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setSpeakerspdfAttribute($value)
    {
        $attribute_name = "speakers_pdf";
        $disk = "uploads";
        $destination_path = "SETTINGS/Speakers";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
