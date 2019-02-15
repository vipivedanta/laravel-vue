<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DBController extends Controller
{
    
    public function getTables(){

        $tables = DB::select('SHOW TABLES');
        dd($tables);
        return response()->json([
            'tables' => [
                'users',
                'clinics'
            ]
        ],200);
    }
}
