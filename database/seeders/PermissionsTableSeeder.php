<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'category_create',
            ],
            [
                'id'    => 18,
                'title' => 'category_edit',
            ],
            [
                'id'    => 19,
                'title' => 'category_show',
            ],
            [
                'id'    => 20,
                'title' => 'category_delete',
            ],
            [
                'id'    => 21,
                'title' => 'category_access',
            ],
            [
                'id'    => 22,
                'title' => 'product_create',
            ],
            [
                'id'    => 23,
                'title' => 'product_edit',
            ],
            [
                'id'    => 24,
                'title' => 'product_show',
            ],
            [
                'id'    => 25,
                'title' => 'product_delete',
            ],
            [
                'id'    => 26,
                'title' => 'product_access',
            ],
            [
                'id'    => 27,
                'title' => 'livreur_create',
            ],
            [
                'id'    => 28,
                'title' => 'livreur_edit',
            ],
            [
                'id'    => 29,
                'title' => 'livreur_show',
            ],
            [
                'id'    => 30,
                'title' => 'livreur_delete',
            ],
            [
                'id'    => 31,
                'title' => 'livreur_access',
            ],
            [
                'id'    => 32,
                'title' => 'page_create',
            ],
            [
                'id'    => 33,
                'title' => 'page_edit',
            ],
            [
                'id'    => 34,
                'title' => 'page_show',
            ],
            [
                'id'    => 35,
                'title' => 'page_delete',
            ],
            [
                'id'    => 36,
                'title' => 'page_access',
            ],
            [
                'id'    => 37,
                'title' => 'collection_create',
            ],
            [
                'id'    => 38,
                'title' => 'collection_edit',
            ],
            [
                'id'    => 39,
                'title' => 'collection_show',
            ],
            [
                'id'    => 40,
                'title' => 'collection_delete',
            ],
            [
                'id'    => 41,
                'title' => 'collection_access',
            ],
            [
                'id'    => 42,
                'title' => 'setting_create',
            ],
            [
                'id'    => 43,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 44,
                'title' => 'setting_show',
            ],
            [
                'id'    => 45,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 46,
                'title' => 'setting_access',
            ],
            [
                'id'    => 47,
                'title' => 'client_create',
            ],
            [
                'id'    => 48,
                'title' => 'client_edit',
            ],
            [
                'id'    => 49,
                'title' => 'client_show',
            ],
            [
                'id'    => 50,
                'title' => 'client_delete',
            ],
            [
                'id'    => 51,
                'title' => 'client_access',
            ],
            [
                'id'    => 52,
                'title' => 'region_create',
            ],
            [
                'id'    => 53,
                'title' => 'region_edit',
            ],
            [
                'id'    => 54,
                'title' => 'region_show',
            ],
            [
                'id'    => 55,
                'title' => 'region_delete',
            ],
            [
                'id'    => 56,
                'title' => 'region_access',
            ],
            [
                'id'    => 57,
                'title' => 'order_create',
            ],
            [
                'id'    => 58,
                'title' => 'order_edit',
            ],
            [
                'id'    => 59,
                'title' => 'order_show',
            ],
            [
                'id'    => 60,
                'title' => 'order_delete',
            ],
            [
                'id'    => 61,
                'title' => 'order_access',
            ],
            [
                'id'    => 62,
                'title' => 'orderdetail_create',
            ],
            [
                'id'    => 63,
                'title' => 'orderdetail_edit',
            ],
            [
                'id'    => 64,
                'title' => 'orderdetail_show',
            ],
            [
                'id'    => 65,
                'title' => 'orderdetail_delete',
            ],
            [
                'id'    => 66,
                'title' => 'orderdetail_access',
            ],
            [
                'id'    => 67,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
