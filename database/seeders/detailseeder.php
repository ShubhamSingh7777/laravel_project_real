<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

class detailseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
          [
          'name'=>'LED TV',
          'des'=>'70inc super hd and morder functionality',
          'img'=>'https://images.samsung.com/is/image/samsung/au_UA70KU6000WXXY_008_Front_black?$L1-Thumbnail$',
          'category'=>'samsung',
          'price'=>'34,400'
          ],
          [
          'name'=>'power bank',
          'des'=>'microsoft bing',
          'img'=>'https://5.imimg.com/data5/NZ/RW/NW/SELLER-7758980/power-bank-500x500.jpg',
          'category'=>'microsoft',
          'price'=>'30000'
          ],
          [
          'name'=>'iphone-13',
          'des'=>'120px due camera',
          'img'=>'https://www.somagnews.com/wp-content/uploads/2021/03/iPhone-13-Design-e1614638593567.jpg',
          'category'=>'iphone13',
          'price'=>'1,20,000'
          ],
          [
            'name'=>'hadphones',
          'des'=>'hadphone with20hz ',
          'img'=>'https://fsa.zobj.net/crop.php?r=M5vORoI84glVc-FABC1ZtvPk-VOA1Gz1oXVvqn1IdSC7Qk5_YbCdyFkcfmdSAadnQ4xVvSo7rOkfz06MI9_OLKx5QK46OGzUuLHXZIB-wrbOc2_pgZSfiPwD0GWIcCRqczp4B8Mukd7aWaMv',
          'category'=>'sony',
          'price'=>'7,000'
          ]
        ]);
    }
}
