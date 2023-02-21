<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory,Translatable;

    public function save(array $options = array())
    {
        if( ! $this->author_id)
        {
            $this->author_id = Auth::user()->id;
        }

        parent::save($options);
    }
}
