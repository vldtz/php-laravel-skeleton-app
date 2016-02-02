<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Services\UserService;
use DebugBar\DebugBar;

class UsersController extends Controller
{
	/**
	 * @var UserService
	 */
    private $userService;

	/**
	 * UsersController constructor.
	 * @param UserService $userService
	 */
	public function __construct(UserService $userService) {
		$this->middleware('auth');

		$this->userService = $userService;
	}


	public function index(){
		$users = $this->userService->getUserList();
		return view('admin/users/index',compact('users'));
	}
}
