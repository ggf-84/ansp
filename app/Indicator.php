<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_ro',
        'title_ru',
        'cat_id',
        'created_at'
    ];

    protected $hidden = [
        'updated_at',
    ];

    public $timestamps = true;

    public function xlsRows(){
        return $this->hasMany('App\XlsData', 'indicator_id', 'id');
    }
}
