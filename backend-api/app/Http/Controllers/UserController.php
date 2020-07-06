<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return JsonResponse
     */
    public function all()
    {
        Log::info('Retrieving all user profiles');
        return response()->json(User::with('boards')->get());
    }

    /**
     * Return a given user by id.
     *
     * @param $id
     * @return JsonResponse
     */
    public function getById($id)
    {
        Log::info('Retrieving user profile for user: '.$id);
        return response()->json(User::findOrFail($id));
    }

    /**
     * Return a given user by email.
     *
     * @param $email
     * @return JsonResponse
     */
    public function getByEmail($email)
    {
        Log::info('Retrieving user profile for user: '.$email);
        return response()->json(User::where('email', $email) -> first());
    }

    /**
     * Return a given user by username.
     *
     * @param $username
     * @return JsonResponse
     */
    public function getByUsername($username)
    {
        Log::info('Retrieving user profile for user: '.$username);
        return response()->json(User::where('username', $username) -> first());
    }
}
