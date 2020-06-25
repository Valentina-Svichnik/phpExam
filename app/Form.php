<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function formable()
    {
        return $this->morphTo();
    }
}
