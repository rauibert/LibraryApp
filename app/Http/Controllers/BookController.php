<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return "Libros y más libros";
    }

    public function create(){
        return "Aqui insertaremos nuevos libros en nuestra libreria";
    }

    public function show($book){
        return "Ha elegido el libro: $book";
    }
}
