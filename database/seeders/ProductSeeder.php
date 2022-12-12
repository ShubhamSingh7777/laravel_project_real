<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

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
                'name'=>'handwatch',
                'price'=>'40,000',
                'category'=>'sonata',
                'description'=>'exillent material quilaty',
                'gallery'=>'https://i02.appmifile.com/762_operator_in/05/07/2021/4c90dda893b43e0153950f36ee37dc03.jpg'
            ],
           
            [
                'name'=>'refregiter',
                'price'=>'40,000',
                'category'=>'sony',
                'description'=>'moder feature and good freeze quailty',
                'gallery'=>'https://i02.appmifile.com/232_operator_in/04/06/2021/568c8fd7c3c4368c14c8ef64cda7866b.jpg',
                
            ]
            ]);
    }
}