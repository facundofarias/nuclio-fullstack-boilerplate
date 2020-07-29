<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    /**
     * Get the board that owns the pin.
     */
    public function board()
    {
        return $this->belongsTo('App\Board');
    }

    /**
     * Get the tags for the given pin.
     */
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'note', 'color', 'media_url', 'board_id'
    ];
}
