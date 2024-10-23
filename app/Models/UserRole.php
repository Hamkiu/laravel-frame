<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $appends = ['encrypt_id'];
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'role',
        'statue',
        'remember_token',
        'created_at',
        'updated_at' ];

    public $incrementing = false;

    public function getEncryptIdAttribute()
	{
		return encrypt($this->id) ;
    }
}
