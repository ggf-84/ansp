<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XlsData extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'indicator',
        'indicator_id',
        'gender_id',
        '1970',
        '1971',
        '1972',
        '1973',
        '1974',
        '1975',
        '1976',
        '1977',
        '1978',
        '1979',
        '1980',
        '1981',
        '1982',
        '1983',
        '1984',
        '1985',
        '1986',
        '1987',
        '1988',
        '1989',
        '1990',
        '1991',
        '1992',
        '1993',
        '1994',
        '1995',
        '1996',
        '1997',
        '1998',
        '1999',
        '2000',
        '2001',
        '2002',
        '2003',
        '2004',
        '2005',
        '2006',
        '2007',
        '2008',
        '2009',
        '2010',
        '2011',
        '2012',
        '2013',
        '2014',
        '2015',
        '2016',
        '2017',
        '2018',
        'created_at'
    ];

    protected $hidden = [
        'updated_at',
    ];

    public $appends = [
        'years', //'y2017'
    ];

    public $timestamps = true;

    public function indicator()
    {
        return $this->belongsTo('App\Indicator', 'indicator_id', 'id');
    }

    // public function getY2017Attribute()
    // {
    //     return $this->attributes['2017'];
    // }

    public function getYearsAttribute()
    {
        $years = [];
        for($y=1970; $y<2019; ++$y ) {
            $years[$y] =  $this->attributes[$y];
        }
        
        return $years;
    }


}