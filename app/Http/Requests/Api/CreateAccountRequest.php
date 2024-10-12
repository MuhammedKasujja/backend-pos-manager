<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class CreateAccountRequest extends Request
{

    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            "company.name" => "string|required",
            "company.email" => "string|required|email",
            "company.phone" => "string|required",
            ///
            "user.first_name" => "string|required",
            "user.last_name" => "string|required",
            "user.email" => "string|required|email",
            "user.password" => "string|required",
            "user.phone" => "string|required"
        ];
    }

    public function prepareForValidation()
    {
        $input = $this->all();

        $this->replace($input);
    }
}
