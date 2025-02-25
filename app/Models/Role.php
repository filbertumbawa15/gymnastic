<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";

    public function processStore(array $data): Role
    {
        $role = new Role();
        $role->rolename = $data['rolename'];
        $role->modifiedby = auth()->user()->name;

        if (!$role->save()) {
            throw new \Exception('Error storing role.');
        }
        return $role;
    }

    public function processUpdate(Role $role, array $data): Role
    {
        $role->rolename = $data['rolename'];
        $role->modifiedby = auth()->user()->name;

        if (!$role->save()) {
            throw new \Exception('Error updating role.');
        }

        return $role;
    }
}
