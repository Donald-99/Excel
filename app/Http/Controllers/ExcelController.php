<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Excel;


class ExcelController extends Controller
{
    public function index()
    {
        return view('excel-read');
    }

    public function importFile(Request $request)
    {
        $request->validate([
            'excelFile' => 'required|mimes:xls,xlsx,csv'
        ]);

        $path = $request->file('excelFile')->getRealPath();
        $data = Excel::toCollection($path)->get();

        // dd($data);

        $data = $data->toArray();
        $results = [];

        foreach($data as $key => $value)
        {
            $results[] = (object) $value;
        }

        return view('excel-read', compact('results'));
    }
}
