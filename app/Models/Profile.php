<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = ['name', 'description'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_profile');
    }

    public function permissionsAvailable($profileId, $search = null)
    {
        $permissions = Permission::whereNotIn('id', function ($query) use ($profileId) {
            $query->select('permission_profile.permission_id');
            $query->from('permission_profile');
            $query->whereRaw("permission_profile.profile_id={$profileId}");
        })
            ->paginate();

        /**
         * ->where(function ($queryFilter) use ($search) {
                if ($search) {
                    $queryFilter->where('permissions.name', 'LIKE', "%$search%");
                }
            })
         */

        return $permissions;
    }
}
