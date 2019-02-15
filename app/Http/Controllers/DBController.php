<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DBController extends Controller
{
    
    public function getTables(){

        $tables = DB::select('show tables');
        foreach($tables as $table)
            $my_tables[] = $table->Tables_in_clarity20 ;

        return response()->json([
            'tables' => $my_tables
        ],200);
    }
}
