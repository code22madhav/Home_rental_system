<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           
            [
                'name'=>'Apartment',
                'price'=>'25000',
                'category'=>'Home',
                'description'=>'A 3 BHK apartment with playgroud',
                'gallery'=>'https://teja12.kuikr.com/is/a/c/880x425/public/images/apartments/original_img/k9yqlp.gif',
    
            ],
            [
                'name'=>'House 2 BHK',
                'price'=>'15000',
                'category'=>'Home',
                'description'=>'A 2 BHK house with personal garden',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMBobxYJbgGfviYGqPhqGM2kWdhk_c-FoZaw&usqp=CAU'
    
            ],
            [
                'name'=>'PG',
                'price'=>'10000',
                'category'=>'Hostel',
                'description'=>'A PG with Free wifi and all modern facilities',
                'gallery'=>'https://cdn.gharoffice.com/assets/propertyimages/10102/pg.jpg?w=394&quality=50',
    
            ],
            [
                'name'=>'House 3 BHK',
                'price'=>'20000',
                'category'=>'Home',
                'description'=>'A 3 BHK house with persnal garden and swiming pool',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnDxS-iqYwH2NkCGs5llfjsCytqfi2DAsgbw&usqp=CAU',
    
            ],
            [
                'name'=>'Mansion',
                'price'=>'100000',
                'category'=>'mansion',
                'description'=>'A luxurious mansion',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsjmB9KBJ6EQj0FGakae-Zo4V__UchI9FA5w&usqp=CAU',
    
            ]

        ]);
    }
}
