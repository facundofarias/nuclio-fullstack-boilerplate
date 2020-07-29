<?php

namespace App\Http\Controllers;

use App\Tag;
use Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TagController extends Controller
{
    /**
     * Show a list of all of the application's tags.
     *
     * @return JsonResponse
     */
    public function all()
    {
        Log::info('Retrieving all tags');
        return response()->json(Tag::all());
    }

    /**
     * Create a new tag instance.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        // Validate request ..
        $tag = Tag::create([
            'tag' => $request->tag,
            'pin_id' => $request->pin_id,
        ]);

        $tag->save();
        return response()->json("Created", 201);
    }
}
