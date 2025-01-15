<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard',[
            'title'=>'Dashboard'
        ]);
       
    }

}
