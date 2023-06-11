<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        dd('UserController asdsadsad');
        $users = User::with(['classe', 'section'])->get();

        return UserResource::collection($users);
    }


}
