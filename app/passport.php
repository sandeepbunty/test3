<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
	public function User()
	{
    return $this->belongsTo(user::class);
}}
