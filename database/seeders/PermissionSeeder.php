<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(['name'=> 'view_album']);
        DB::table('permissions')->insert(['name'=> 'create_album']);
        DB::table('permissions')->insert(['name'=> 'edit_album']);
        DB::table('permissions')->insert(['name'=> 'delete_album']);

        DB::table('permissions')->insert(['name'=> 'view_playlist']);
        DB::table('permissions')->insert(['name'=> 'create_playlist']);
        DB::table('permissions')->insert(['name'=> 'edit_playlist']);
        DB::table('permissions')->insert(['name'=> 'delete_playlist']);
    }
}
