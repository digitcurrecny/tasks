<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Core\Http\Resources\LoginResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $data = Validator::make($request->all(), [

            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:5',
        ]);




        if ($data->fails()) {

            return response([

                'data' => [
                    'status' => 'Error',
                    'ms' => $data->errors(),

                ],

            ], 400);
        }


            $data = $request->validate([
                'email' => 'required|email|exists:users,email',
                'password' => 'required|string|min:5',

        ]);


        if (! auth()->attempt($data)){

            return response([


                'data' => [
                    'status' => 'Error',
                    'ms' => 'Invlaid Username and password',

                ],

            ],Response::HTTP_FORBIDDEN);
        }




     // .  RegiterResource
        return new LoginResource(auth()->user());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
