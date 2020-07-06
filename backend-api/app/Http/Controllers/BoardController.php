<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BoardController extends Controller
{
    /**
     * Show a list of all of the application's boards.
     *
     * @return JsonResponse
     */
    public function all()
    {
        Log::info('Retrieving all boards');
        return response()->json(Board::with('pins')->get());
    }

    /**
     * Create a new board instance.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        // Validate the request...

        $board = Board::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        $board->save();
        return response()->json("Created", 201);
    }

    /**
     * Return a given board by id.
     *
     * @param $id
     * @return JsonResponse
     */
    public function getById($id)
    {
        Log::info('Retrieving board with id: '.$id);
        return response()->json(Board::findOrFail($id));
    }

    /**
     * Return a collection of boards given a user id.
     *
     * @param $userId
     * @return JsonResponse
     */
    public function getByUser($userId)
    {
        Log::info('Retrieving boards with user id: '.$userId);
        $boards = Board::where('user_id', $userId)->get();
        return response()->json($boards);
    }
}
