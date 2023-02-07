<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'is_active'          => 'Is Active',
            'is_active_helper'   => ' ',
            'in_homepage'        => 'In Homepage',
            'in_homepage_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'image'              => 'Image',
            'image_helper'       => '1080x133',
        ],
    ],
    'product' => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'image'              => 'Images',
            'image_helper'       => '130x130',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'old_price'          => 'Old Price',
            'old_price_helper'   => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'notes'              => 'Notes',
            'notes_helper'       => ' ',
        ],
    ],
    'livreur' => [
        'title'          => 'Livreurs',
        'title_singular' => 'Livreur',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'photo'             => 'Photo',
            'photo_helper'      => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
        ],
    ],
    'page' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'content'           => 'Content',
            'content_helper'    => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'collection' => [
        'title'          => 'Collections',
        'title_singular' => 'Collection',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'products'          => 'Products',
            'products_helper'   => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Setting',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'nom'                  => 'Nom',
            'nom_helper'           => ' ',
            'logo'                 => 'Logo',
            'logo_helper'          => '465x320',
            'banners'              => 'Banners',
            'banners_helper'       => '1920x360',
            'free_shipping'        => 'Livraison gratuite à partir de',
            'free_shipping_helper' => ' ',
            'min_order'            => 'La valeur minimale de commande',
            'min_order_helper'     => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'email'                => 'Email',
            'email_helper'         => ' ',
            'start_time'           => 'Heure d\'ouverture',
            'start_time_helper'    => ' ',
            'end_time'             => 'Heure de fermeture',
            'end_time_helper'      => ' ',
            'adresse'              => 'Adresse',
            'adresse_helper'       => ' ',
            'phone'                => 'Telephone',
            'phone_helper'         => ' ',
        ],
    ],
    'client' => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'name'                   => 'Nom',
            'name_helper'            => ' ',
            'adresse'                => 'Adresse',
            'adresse_helper'         => ' ',
            'phone'                  => 'Telephone',
            'phone_helper'           => ' ',
            'coordinates'            => 'coordinates X:Y',
            'coordinates_helper'     => ' ',
            'coordinates_map'        => 'Coordinates Map',
            'coordinates_map_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'region'                 => 'Region',
            'region_helper'          => ' ',
        ],
    ],
    'region' => [
        'title'          => 'Regions',
        'title_singular' => 'Region',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'ville'             => 'Ville',
            'ville_helper'      => ' ',
            'regions'           => 'Regions',
            'regions_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'order' => [
        'title'          => 'Commandes',
        'title_singular' => 'Commande',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'client'            => 'Client',
            'client_helper'     => ' ',
            'total'             => 'Total',
            'total_helper'      => ' ',
            'livraison'         => 'Livraison',
            'livraison_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'orderdetail' => [
        'title'          => 'Orderdetails',
        'title_singular' => 'Orderdetail',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'total'             => 'Total',
            'total_helper'      => ' ',
            'quantity'          => 'Quantity',
            'quantity_helper'   => ' ',
            'product'           => 'Product',
            'product_helper'    => ' ',
            'order'             => 'Order',
            'order_helper'      => ' ',
            'discount'          => 'Discount',
            'discount_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'coupon' => [
        'title'          => 'Coupon',
        'title_singular' => 'Coupon',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'percentage'        => 'Percentage',
            'percentage_helper' => ' ',
            'valid'             => 'Valid',
            'valid_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
