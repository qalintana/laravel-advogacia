<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Profile;
use Illuminate\Http\Request;

class PermissionProfileController extends Controller
{

    protected $profile, $permission;
    public function __construct(Profile $profile, Permission $permission)
    {
        $this->profile = $profile;
        $this->permission = $permission;
    }


    public function permissions($idPerfil)
    {
        $profile = $this->profile->find($idPerfil);
        if (!$profile) {
            return redirect()->back();
        }

        $permissions = $profile->permissions()
            ->paginate();

        return view('admin.pages.profiles.permissions.permissions', compact('profile', 'permissions'));
    }

    public function permissionsAvailable(Request $request, $id)
    {

        if (!$profile = $this->profile->find($id)) {
            return redirect()->back();
        }
        $filters = $request->except('_token');
        $permissions = $this->profile->permissionsAvailable($profile->id);
        return view('admin.pages.profiles.permissions.available', compact('profile', 'permissions', 'filters'));
    }

    public function attachPermissionsProfile(Request $request, $id)
    {

        if (!$profile = $this->profile->find($id)) {
            return redirect()->back();
        }

        if (!$request->permissions || count($request->permissions) == 0) {
            return redirect()->back()->with('info', 'Precisa escolher pelo menos uma permissão');
        }

        $profile->permissions()->attach($request->permissions);
        return redirect()->route('profiles.permissions', $profile->id);
    }

    public function detachPermissionsProfile($id, $idPermission)
    {

        $profile = $this->profile->find($id);
        $permission = $this->permission->find($idPermission);

        if (!$profile || !$permission) {
            return redirect()->back();
        }
        $profile->permissions()->detach($permission);
        return redirect()->route('profiles.permissions', $profile->id);
    }

    public function profiles($idPermission)
    {
        $permission = $this->permission->find($idPermission);

        if (!$permission) {
            return redirect()->back();
        }
        $profiles = $permission->profiles()->paginate();

        return view('admin.pages.permissions.profiles.profiles', compact('permission', 'profiles'));
    }
}
