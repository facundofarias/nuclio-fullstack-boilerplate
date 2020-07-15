<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Response;
use Validator;
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
        $boardValidator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string','max:255'],
            'user_id' => ['required', 'integer'],
        ]);

        if($boardValidator->fails()) {
            $errors = $boardValidator->errors()->getMessages();
            $code = Response::HTTP_NOT_ACCEPTABLE;
            return response()->json(['error' => $errors, 'code' => $code], $code);
        }

        if (User::where('id', $request->user_id)->count() == 0)
        {
            $code = Response::HTTP_NOT_ACCEPTABLE;
            return response()->json(['error' => 'User Id does not exist', 'code' => $code], $code);
        }

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
