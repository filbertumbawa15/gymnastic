<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function processStore(array $data): User
    {
        $user = new User();
        $user->uuid = $data['uuid'] ?? "";
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->role_id = $data['role_id'];
        $user->otp = $data['otp'] ?? "";
        $user->modifiedby = auth()->user()->name ?? "GYM SYSTEM"; // Assuming you track who created the user

        if (!$user->save()) {
            throw new \Exception('Error storing user.');
        }

        $membersData = [
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => "",
            'address' => "",
            'status' => 'active',
        ];

        if ($data['role_id'] == 3) {
            Members::create($membersData);
        }

        return $user;
    }

    public function processUpdate($id, array $data): User
    {
        $user = User::findOrFail($id);
        $user->uuid = $data['uuid'] ?? "";
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->role_id = $data['role_id'];
        $user->otp = $data['otp'] ?? "";
        $user->modifiedby = auth()->user()->name ?? "GYM SYSTEM"; // Assuming you track who created the user

        if (!$user->save()) {
            throw new \Exception('Error storing user.');
        }

        return $user;
    }

    public function processDestroy($id): User
    {
        $user = new User();
        $user = $user->where('id', $id)->first();
        $user->delete();

        return $user;
    }
}
