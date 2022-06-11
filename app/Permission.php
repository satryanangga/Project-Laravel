<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_data_ortu',
            'add_data_ortu',
            'edit_data_ortu',
            'delete_data_ortu',
            
            'view_data_anak',
            'add_data_anak',
            'edit_data_anak',
            'delete_data_anak',

            'view_data_pemeriksaan',

            'view_catatan_kehamilan',
            'add_catatan_kehamilan',
            'edit_catatan_kehamilan',
            'delete_catatan_kehamilan',

            'view_catatan_persalinan',
            'add_catatan_persalinan',
            'edit_catatan_persalinan',
            'delete_catatan_persalinan',
            
            'view_catatan_anak',
            'add_catatan_anak',
            'edit_catatan_anak',
            'delete_catatan_anak',
        ];
    }
}
