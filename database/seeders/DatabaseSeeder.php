<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $book = new Book();

        $book->name = 'El Quijote';
        $book->ISBN = 'ISBN213453';
        $book->author = 'Cervantes';
        $book->description = 'Don Quijote de la Mancha​ es 
                            una novela escrita por el español
                            Miguel de Cervantes Saavedra. 
                            Publicada su primera parte con el
                             título de El ingenioso hidalgo
                              don Quijote de la Mancha a comienzos';
        $book->image = '/image/quijote.png';

        $book->save();
        
    }
}
