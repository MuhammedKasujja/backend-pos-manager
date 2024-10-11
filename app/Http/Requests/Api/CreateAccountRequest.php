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
            "company_name" => "string|required",
            "company_email" => "string|max:100"
        ];
    }

    public function prepareForValidation()
    {
        $input = $this->all();

        $this->replace($input);
    }
}
