<?php

namespace App\Services;

use App\Pin;

class SearchPinService
{
    /**
     * Returns a list of all the pins that matches the search
     *
     * @param $query
     * @return array
     */
    public function search($query)
    {
        return Pin::where('note', 'LIKE', '%' . $query . '%')
            ->orWhere('color', 'LIKE', '%' . $query . '%')->get();
    }
}
