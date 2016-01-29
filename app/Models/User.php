<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Mappable; // base trait

class User extends Authenticatable
{
	use Eloquence, Mappable;

    const CREATED_AT = 'u_created_at';
	const UPDATED_AT = 'u_updated_at';

	protected $primaryKey = 'u_id';
	protected $maps = [
        'id' => 'u_id',
        'name' => 'u_name',
		'password' => 'u_password',
		'email' => 'u_email',
		'remember_token' => 'u_remember_token',
		'createdAt' => 'u_created_at',
		'updatedAt' => 'u_updated_at',
	];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
