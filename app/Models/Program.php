<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class Program extends Model
{
    use CrudTrait;
    use HasTranslations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'programs';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['speaker_id', 'scene_id', 'day', 'title', 'start_date', 'end_date', 'type', 'content'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['content', 'title'];
    protected $casts = [
        'start_date' => 'time',
        'end_date' => 'time',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function speaker()
    {
        return $this->belongsTo('App\Models\Speaker');
    }

    public function scene()
    {
        return $this->belongsTo('App\Models\Scene');
    }

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

}
