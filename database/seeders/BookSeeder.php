<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        $book2 = new Book();

        $book2->name = 'El Quijote';
        $book2->ISBN = 'ISBN213453';
        $book2->author = 'Cervantes';
        $book2->description = 'Don Quijote de la Mancha​ es 
                            una novela escrita por el español
                            Miguel de Cervantes Saavedra. 
                            Publicada su primera parte con el
                             título de El ingenioso hidalgo
                              don Quijote de la Mancha a comienzos';
        $book2->image = '/image/quijote.png';

        $book2->save();
    }
}
