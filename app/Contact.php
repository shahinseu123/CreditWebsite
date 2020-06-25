<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
      "firstname", "lastname", "phone", "email", "streetaddress", "cityzip", "dob", "identitysign", "identityUsername",
      "ssn", "consistentIncome","finincialBint","purchasePlan", "doyoudisput", "activeChepter7",
      "isAboveTure", "doUauthoriseMe", "appoinment", "preferedtime", "leavecomment",
      
    ];
}
