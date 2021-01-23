<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /**
     *  The path to the thread.
     *
     * @return string
     */
    public function path()
    {
        return "/threads/{$this->id}";
    }
}
