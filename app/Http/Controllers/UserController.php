<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {       
        $users = User::with(['classe', 'section'])->limit(50)->get();

        return UserResource::collection($users);
    }


}
