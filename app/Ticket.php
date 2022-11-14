<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function getData()
    {
        return $this->store_id;
    }
}
