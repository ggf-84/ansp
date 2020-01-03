<?php

namespace App\Imports;

use App\XlsData;
use App\Gender;
use App\Indicator;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class XlsImport implements ToModel, WithHeadingRow, WithMultipleSheets
{

    public $source = [];
    public $categoryId = null;
    public $lang = null;

    public function __construct( $language = null ) {
        
        

        if($language)
            $this->lang = $language;    

            var_dump($language);
    }
    
    public function model(array $row)
    {
        $source = $this->source;
        $data   = [];
dd($this->lang);
        if(!count($source)){
            for($y=1970; $y<2019; ++$y ) {
                $source[$y] = false;
            }
        }
        
        foreach( array_filter($row) as $key=>$value) {
            if(trim($value) == 'Source:') {

                foreach( $source as $k=>$v) {
                    if(!empty($row[$k]))
                        $source[$k] = $row[$k];
                }
                
                break;
            }else{

                if( !empty($source[$key]) && is_numeric($key)) {
                    $data[$key] = $source[$key] .'/'. (int)$value;
                    continue;
                }

                $data[(string)$key] = $value;  
            }
        }
        
        $this->source = $source;

        if(count($data) > 0) {
            $data['cat_id'] = $this->categoryId;
            XlsData::create($data);
        }  
            
    }

    public function sheets(): array
    {
        return [ new XlsImport($this->categoryId) ];
    }
}

?>