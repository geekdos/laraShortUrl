<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LinksController extends Controller
{

    public function index(){
        return view('links.index');
    }

    public function create(){
        return view('links.create');
    }

    public function store(){
        return view('links.store');
    }
}
