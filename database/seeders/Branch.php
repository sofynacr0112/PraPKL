<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel= [
            ['branchNo' => 'B005', 'bAdress' => "22 Deer Rd London"],
            ['branchNo' => 'B007', 'bAdress' => "16 Argyll St Aberdeen"],
            ['branchNo' => 'B003', 'bAdress' => "163 Main St, Glasgow"],


            
        ];
        DB::table('Branch')->insert($sampel);

    }
}
