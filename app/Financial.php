<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
   protected $fillable = [
        'educationexp', 'accomodationexp','utilityexp','monthlyincome','student_id'
    ]; 
   public function student($value='')
   {
   	return $this->hasOne('App\Student');
   }

   public function loan($value='')
   {
   	return $this->hasOne('App\Loan');
   }
}
