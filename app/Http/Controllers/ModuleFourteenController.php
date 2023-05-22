<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModuleFourteenController extends Controller
{
    //

    function __construct()
    {
    }

    public function input(Request $request)
    {
        $name = $request->input('input');
        $userAgent = $request->header('User-Agent');
        $ipAddress = $request->ip();
        $query = $request->query('object');

        $filePath = "";
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images'), $imageName);

            $filePath = url('/images/' . $imageName);
        }



        return view('input', compact('name', 'userAgent','ipAddress', 'query', 'filePath'));
    }

    public function api()
    {
        // Your logic here...
        $responseData = [
            'message' => 'Welcome to the API',
            'data' => [
                'key1' => 'value1',
                'key2' => 'value2',
            ]
        ];

        return view('input', compact('responseData'));
    }

    function submit(Request $request)
    {
        $email = $request->input('email');

        // Process the email or perform additional operations
        if ($email){
            $responseData = [
                'success' => true,
                'message' => 'Form submitted successfully.'
            ];

            return new JsonResponse($responseData);
        }

    }


}
