<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Permission;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'user_permission','user_id',
            'permission_id');
    }

    public function hasAccess( $permission_name) :bool
    {
        foreach ($this->permissions()->get() as $permission) {
            if($permission->name == $permission_name){
                return true;
            }
        }
        foreach ($this->roles()->get() as $role) {
            foreach ($role->permissions()->get() as $permission) {
                if($permission->name == $permission_name){
                    return true;
                }
            }
        }
        return false;
    }
    public function hasAdmin() :bool
    {
        foreach ($this->roles()->get() as $role) {

            if($role->name=='admin'){
                return true;

            }
        }
        return false;
    }




}
