<?php


namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Services\SearchPinService;

class SearchController extends Controller
{
    /**
     * The search service implementation.
     *
     * @var SearchPinService
     */
    protected $searchService;

    /**
     * Create a new controller instance.
     *
     * @param SearchPinService $searchService
     * @return void
     */
    public function __construct(SearchPinService $searchService)
    {
        $this->searchService = $searchService;
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
}
