<?php

namespace App\Http\Controllers;

use App\Board;
use App\Pin;
use Exception;
use Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PinController extends Controller
{
    /**
     * Show a list of all of the application's pins.
     *
     * @return JsonResponse
     */
    public function all()
    {
        Log::info('Retrieving all pins');
        return response()->json(Pin::with('tags')->get());
    }

    /**
     * Show a list of all the pins that matches the search
     *
     * @param $query
     * @return JsonResponse
     */
    public function search($query)
    {
        Log::info('Retrieving all pins related to -> ' . $query);
        $pins = $this->searchService->search($query);

        Log::info('Retrieving query -> ' . $pins);
        return response()->json($pins);
    }

    /**
     * Create a new pin instance.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        $pinValidator = Validator::make($request->all(), [
            'note' => ['required', 'string', 'max:255'],
            'media_url' => ['required', 'url'],
            'board_id' => ['required', 'integer'],
        ]);

        if($pinValidator->fails()) {
            $errors = $pinValidator->errors()->getMessages();
            $code = Response::HTTP_NOT_ACCEPTABLE;
            return response()->json(['error' => $errors, 'code' => $code], $code);
        }

        try {
            $board = Board::where('id', $request->board_id)->firstOrFail();
            $pin = Pin::create([
                'note' => $request->note,
                'color' => $request->color,
                'media_url' => $request->media_url,
                'board_id' => $board->id,
            ]);

            $pin->save();
            return response()->json("Created", 201);

        } catch (Exception $e) {
            $code = Response::HTTP_NOT_ACCEPTABLE;
            return response()->json(['error' => 'Board Id does not exist', 'code' => $code], $code);
        }
    }

    /**
     * Return a given pin by id.
     *
     * @param $id
     * @return JsonResponse
     */
    public function getById($id)
    {
        Log::info('Retrieving pin with id: '.$id);
        return response()->json(Pin::findOrFail($id));
    }

    /**
     * Return a collection of pins given a board id.
     *
     * @param $boardId
     * @return JsonResponse
     */
    public function GetByBoard($boardId)
    {
        Log::info('Retrieving pins with board id: '.$boardId);
        $pins = Pin::where('board_id', $boardId)->get();
        return response()->json($pins);
    }
}
