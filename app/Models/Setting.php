<?php

namespace App\Models;

use App\Traits\CustomCrudTrait;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class Setting extends Model
{
    use CustomCrudTrait;
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
    protected $translatable = ['seo_title', 'seo_description', 'seo_keywords', 'address', 'place', 'speakers_content', 'bars_content', 'location_content'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
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

    public function setLocationimageAttribute($value)
    {
        $attribute_name = "location_image";
        $disk = "uploads";
        $destination_path = "SETTINGS/Location";
        $image_width = 1000;
        $image_height = NULL;

        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->image);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->resize($image_width, $image_height, function ($constraint) {
                $constraint->aspectRatio();
            });
            // 1. Generate a filename.
            $filename = md5($value.time()).'.png';

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

            // 3. Save the path to the database
            $this->attributes[$attribute_name] = '/'.$disk.'/'.$destination_path.'/'.$filename;
        }
    }

}
