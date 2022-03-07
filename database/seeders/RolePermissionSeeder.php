<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $view_album = DB::table('permissions')->where('name', '=', 'view_album')->first();
        $create_album = DB::table('permissions')->where('name', '=', 'create_album')->first();
        $edit_album = DB::table('permissions')->where('name', '=', 'edit_album')->first();
        $delete_album = DB::table('permissions')->where('name', '=', 'delete_album')->first();
        $view_playlist = DB::table('permissions')->where('name', '=', 'view_playlist')->first();
        $create_playlist = DB::table('permissions')->where('name', '=', 'create_playlist')->first();
        $edit_playlist = DB::table('permissions')->where('name', '=', 'edit_playlist')->first();
        $delete_playlist = DB::table('permissions')->where('name', '=', 'delete_playlist')->first();
       
        $super_admin = DB::table('roles')->where('name', '=', 'super_admin')->first();
        $admin = DB::table('roles')->where('name', '=', 'admin')->first();
        $editor = DB::table('roles')->where('name', '=', 'editor')->first();
        
        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $view_album->id]);
        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $create_album->id]);
        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $edit_album->id]);
        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $delete_album->id]);

        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $view_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $create_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $edit_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $super_admin->id, 'permission_id' => $delete_playlist->id]);

        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $view_album->id]);
        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $create_album->id]);
        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $edit_album->id]);
        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $delete_album->id]);

        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $view_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $create_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $edit_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $admin->id, 'permission_id' => $delete_playlist->id]);

        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $view_album->id]);
        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $create_album->id]);
        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $edit_album->id]);
        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $delete_album->id]);

        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $view_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $create_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $edit_playlist->id]);
        DB::table('permission_role')->insert(['role_id' => $editor->id, 'permission_id' => $delete_playlist->id]);
    }
}
