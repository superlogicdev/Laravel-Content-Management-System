<?php

namespace Botble\Theme\Http\Requests;

use Botble\Support\Http\Requests\Request;

class CustomJsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'header_js' => 'max:2500',
            'body_js'   => 'max:2500',
            'footer_js' => 'max:2500',
        ];
    }
}
