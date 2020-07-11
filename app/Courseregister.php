<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseregister extends Model
{
   protected $fillable = [
       'user_id', 
       'course_code',
       'status',
       ];
       public function users() {
           return $this->belongsTo('App\User');
       }
       
}
