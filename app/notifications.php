<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
        protected $fillable = ['id','user_logged','user_hero','status','note'];

}
