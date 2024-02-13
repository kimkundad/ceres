<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cusday;

class DashboardController extends Controller
{
    //

    public function index(){

        $data['online14'] = 1;
        return view('admin.dashboard.index', $data);
    }


}
