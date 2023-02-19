<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('books.index');
    }

    public function create(){
        return view('books.create');
    }

    public function show($book){
        return view('books.show', compact('book'));
    }

    public function filterYear($year){
        return view('books.filter', compact('year'));
    }
}
