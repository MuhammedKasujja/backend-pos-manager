<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    use RuntimeFormRequest;

    protected $file_validation = 'sometimes|file|max:100000|mimes:png,ai,jpeg,tiff,pdf,gif,psd,txt,doc,xls,ppt,xlsx,docx,pptx,webp,xml,zip,csv,ods,odt,odp';
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [];
    }

    public function fileValidation()
    {
        if (config('pos_manager.upload_extensions'))
            return $this->file_validation . "," . config('pos_manager.upload_extensions');

        return $this->file_validation;
    }
}
