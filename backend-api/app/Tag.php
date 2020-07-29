<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Get the pin that owns the tag.
     */
    public function pin()
    {
        return $this->belongsTo('App\Pin');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag', 'pin_id'
    ];
}
