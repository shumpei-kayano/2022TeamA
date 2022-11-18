<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    public function notice(){
        return $this->hasmany('App\Notice');
}
}
