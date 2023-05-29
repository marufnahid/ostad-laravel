<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ModuleFifteenController extends Controller
{


    function __construct()
    {

    }

//    protected function validator(array $data): \Illuminate\Validation\Validator
//    {
//        return Validator::make($data, [
//            'name' => ['required', 'string','min:2', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//    }

    function input()
    {

        return view('fifteen-input');
    }


    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        $name = $validator->validated()['name'];
        $email = $validator->validated()['email'];
        $password = $validator->validated()['password'];


    }

}
