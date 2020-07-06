<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    /**
     * Get the user that owns the board.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the pins for the given board.
     */
    public function pins()
    {
        return $this->hasMany('App\Pin');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'user_id',
    ];
}
