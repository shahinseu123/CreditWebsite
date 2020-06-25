<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactFormData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "firstname" => "required",
            "lastname" => "required",
            "phone" => "required",
            "email" => "required|email",
            "streetaddress" => "required",
            "cityzip" => "required",
            "dob" => "required",
            "identitysign" => "required",
            "identityUsername" => "required",
            "identityPassword" => "required",
            "ssn" => "required",
            "consistentIncome" => "required",
            "finincialBint" => "required",
            "purchasePlan" => "required",
            "doyoudisput" => "required",
            "activeChepter7" => "required",
            "isAboveTure" => "required",
            "doUauthoriseMe" => "required",
            "appoinment" => "required",
            "preferedtime" => "required",
            "leavecomment" => "required",
        ];
    }
}
