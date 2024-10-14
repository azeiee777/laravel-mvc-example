<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function getUserDetails(){
        return $this->userService->getUserDetails("abdul.ansari@unthinkable.co");
    }
}
