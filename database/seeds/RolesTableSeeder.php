<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
           [
               [
                    'name' =>'student',
                    'nameAlias' => 'student',
                ],
                [
                    'name' => 'teacher',
                    'nameAlias' => 'teacher',
                ],
                [
                    'name' => 'director',
                    'nameAlias' => 'director',
                ],
                [
                    'name' => 'admin',
                    'nameAlias' => 'admin',
                ]
            ]
            );
    }
}
