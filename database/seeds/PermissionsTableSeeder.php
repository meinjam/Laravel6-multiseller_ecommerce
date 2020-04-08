<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-04-05 12:48:15',
                'updated_at' => '2020-04-05 12:48:15',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-04-05 12:48:16',
                'updated_at' => '2020-04-05 12:48:16',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-04-05 12:48:17',
                'updated_at' => '2020-04-05 12:48:17',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-04-05 12:48:17',
                'updated_at' => '2020-04-05 12:48:17',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-05 12:48:17',
                'updated_at' => '2020-04-05 12:48:17',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-05 12:48:17',
                'updated_at' => '2020-04-05 12:48:17',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-05 12:48:17',
                'updated_at' => '2020-04-05 12:48:17',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-05 12:48:17',
                'updated_at' => '2020-04-05 12:48:17',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-05 12:48:17',
                'updated_at' => '2020-04-05 12:48:17',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-05 12:48:28',
                'updated_at' => '2020-04-05 12:48:28',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-05 12:48:28',
                'updated_at' => '2020-04-05 12:48:28',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-05 12:48:28',
                'updated_at' => '2020-04-05 12:48:28',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-05 12:48:28',
                'updated_at' => '2020-04-05 12:48:28',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-05 12:48:29',
                'updated_at' => '2020-04-05 12:48:29',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-05 12:48:30',
                'updated_at' => '2020-04-05 12:48:30',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-05 12:48:30',
                'updated_at' => '2020-04-05 12:48:30',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-05 12:48:30',
                'updated_at' => '2020-04-05 12:48:30',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-05 12:48:30',
                'updated_at' => '2020-04-05 12:48:30',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-05 12:48:30',
                'updated_at' => '2020-04-05 12:48:30',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-05 12:48:31',
                'updated_at' => '2020-04-05 12:48:31',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-05 12:48:31',
                'updated_at' => '2020-04-05 12:48:31',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-05 12:48:32',
                'updated_at' => '2020-04-05 12:48:32',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-05 12:48:32',
                'updated_at' => '2020-04-05 12:48:32',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-05 12:48:32',
                'updated_at' => '2020-04-05 12:48:32',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-04-05 12:48:35',
                'updated_at' => '2020-04-05 12:48:35',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-04-05 13:03:38',
                'updated_at' => '2020-04-05 13:03:38',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-04-05 13:03:38',
                'updated_at' => '2020-04-05 13:03:38',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-04-05 13:03:38',
                'updated_at' => '2020-04-05 13:03:38',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-04-05 13:03:38',
                'updated_at' => '2020-04-05 13:03:38',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-04-05 13:03:38',
                'updated_at' => '2020-04-05 13:03:38',
            ),
        ));
        
        
    }
}