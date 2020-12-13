<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'Sony',
                'price'=>'100$',
                'description'=>"A smartphone with 48mp",
                'category'=>"mobile",
                'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAxmo7MY1e-0m8Edgz8qLu3U4XkCj2IgAlIQ&usqp=CAU"
            ],
            [
                'name'=>'Samsung',
                'price'=>'100$',
                'description'=>"A smartphone with 5GB",
                'category'=>"tablet",
                'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHcNn7tFSr_s7Bklm2m1a1woWZImUwSMhPGQ&usqp=CAU"
            ],
            [
                'name'=>'Apple',
                'price'=>'70$',
                'description'=>"A smartwatch",
                'category'=>"watch",
                'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbrsj21yQdil5UXm1l6I7_XevQN_WgJWVCOw&usqp=CAU"
            ],
            [
                'name'=>'Oppo',
                'price'=>'50$',
                'description'=>"A smartphone with 6GB",
                'category'=>"mobile",
                'gallery'=>"https://cdn.vox-cdn.com/thumbor/SJcmPEheS_cbdujd4zbIPTpuXfg=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/13315959/akrales_181019_3014_0770.jpg"
            ]
        ]);
    }
}
