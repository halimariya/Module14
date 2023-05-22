<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainController extends Controller {
    // Question 1:
    function info( Request $request ): string{

        $name = $request->input( 'name' );

        return $name;
    }

    //Question 2:

    function userAgent( Request $request ): string{

        $userAgent = $request->header( 'User-Agent' );
        return $userAgent;
    }

    //Question 3:
    function pageQuery( Request $request ) {

        $page = $request->query( 'page', null );

        return $page;

    }

    // Question 4:
    function jsonResponsive( Request $request ): JsonResponse{

        $identity = array(
            "message" => "success",
            "data"    => array(
                'name' => 'John Doe',
                'age'  => 29,
            ),

        );

        return response()->json( $identity );
    }

    //Question 5:
    function uploadFeature( Request $request ): bool{
        $file = $request->file( 'avater' );
        $file->move( public_path( 'uploads' ), $file->getClientOriginalName() );
        return true;
    }

    // Question 6:
    function rememberToken( Request $request ) {
        $rememberToken = request()->cookie( 'remember_token', null );
        return $rememberToken;
    }

    //Question 7
    function submit( Request $request ) {
        $email = $request->input( 'email' );
        $data = [
            'success' => true,
            'message' => 'Form submitted successfully.',
        ];
        return response()->json( $data );
    }
}