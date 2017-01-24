<?php

namespace LaravelAndroid\Http\Controllers\Api;

use Illuminate\Http\Request;
use LaravelAndroid\Http\Controllers\Controller;
use LaravelAndroid\Http\Requests\UserRequest;
use LaravelAndroid\Repositories\UserRepository;

class UsersController extends Controller
{
	/**
	 * @var UserRepository
	 */
	private $repository;
	
	public function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}
    
    public function store(UserRequest $request) 
    {
    	$user = $this->repository->create($request->all());
    	return response()->json($user, 201);
    }
}
