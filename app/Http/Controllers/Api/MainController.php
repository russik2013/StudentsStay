<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Validator\MainValidator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;

class MainController extends Controller
{
    protected $user;
    public function __construct(MainValidator $request)
    {
       // $this->middleware('UserApiVal');
        JWTAuth::setToken($request->input('token'));
        $this->user =  JWTAuth::toUser();
    }
}
