<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @OA\Info(
 *    title="Shop API",
 *    version="1.0.0",
 *    description="API for shop"
 * )
 */


class UserController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/v1/users",
     *     summary="Get all users",
     *     tags={"Users"},
     *     @OA\Response(
     *         response=200,
     *         description="get all users",
     *     )
     * )
     */
    public function getAllUsers(Request $request)
    {
        return response()->json([
            'message' => 'Get all users'
        ]);
    }
}
