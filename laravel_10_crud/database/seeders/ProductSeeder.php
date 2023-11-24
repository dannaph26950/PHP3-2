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
        // thêm dữ liệu
        for($i=0; $i<=50; $i++){
            DB::table('products')->insert([
                'name'=>'Điện thoại IP15',
                'detail'=>'100000',

            ]);
        }
    }
}
