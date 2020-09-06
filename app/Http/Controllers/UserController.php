<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use Mehnat\User\Entities\User;
use Mehnat\User\Services\UserService;
use Mehnat\User\Repository\UserRepository;

class UserController extends Controller
{
    private $usersClass;
    private $userService;
    private $userRepository;
    public function __construct()
    {
        $this->usersClass = new User;
        $this->userService = new UserService;
        $this->userRepository = new UserRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->usersClass;
        $users = $this->userService->filter($users);
        $users = $this->userService->sort($users);
        // get users
        $users = $this->userRepository->getAll($users);
        
        return Response::successResponse($users, 'Users retrieved successfully!');
        //return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
