<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Imports\XlsImport;
use App\Category;
use App\XlsData;

use DB;
use Excel;

class XlsDataController extends Controller
{

    public function index()
    {
        // $data = XlsData::get();
        $data = XlsData::orderBy('id', 'desc')->take(5)->get();
        $categories = Category::get();
        return view('/vendor/voyager/import_excel/browse', compact('data','categories'));
    }

    public function import(Request $request)
    {
        Excel::import(new XlsImport( $request->lang), $request->file('select_file'));

        return back()->with('success', 'Excel Data Imported successfully!');
    }

    public function getChart()
    {
        $data = XlsData::with('category')->get();

        return response()->json($data, 200);
    }
}
