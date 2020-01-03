<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_ro',
        'title_ru' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at', 'created_at'
    ];

    public function indicators(){
        return $this->hasMany('App\Indicator', 'cat_id', 'id');
    }


}
