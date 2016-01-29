<?php
/**
 * Created by: VladC
 * Date: 29.01.2016
 * Time: 11:38
 */

namespace App\Services;


use App\Repositories\UserRepository;

class UserService {

	/**
	 * @var UserRepository
	 */
	protected $userRepository;

	/**
	 * UserService constructor.
	 * @param UserRepository $userRepository
	 */
	public function __construct(UserRepository $userRepository) {
		$this->userRepository = $userRepository;
	}


	/**
	 * @param $id
	 * @return mixed
	 */
	function getUser($id) {
		return $this->userRepository->find($id);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|mixed|static[]
	 */
	function getUserList() {
		return $this->userRepository->findAll();
	}
}