<?php
/**
 * User: VladC
 * Date: 28.01.2016
 * Time: 18:02
 */

namespace App\Repositories;

use App\Models\User;

class UserRepository extends AbstractRepository{

	protected function model() {
		return User::class;
	}

}