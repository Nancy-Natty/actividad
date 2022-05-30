<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function index(){
        return view('admin.index');
    }
    public function flot(){
        return view('admin.flot');
    }
    public function morris(){
        return view('admin.morris');
    }
    public function timeline(){
        return view('admin.timeline');
    }
    public function tables(){
        return view('admin.tables');
    }
    public function forms(){
        return view('admin.forms');
    }
    public function panelswells(){
        return view('admin.panelswells');
    }
    public function grid(){
        return view('admin.grid');
    }
    public function notifications(){
        return view('admin.notifications');
    }
    public function typography(){
        return view('admin.typography');
    }
    public function buttons(){
        return view('admin.buttons');
    }
    public function blank(){
        return view('admin.blank');
    }
}
