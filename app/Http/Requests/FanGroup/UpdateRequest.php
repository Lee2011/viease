<?php

namespace App\Http\Requests\FanGroup;

use App\Http\Requests\Request;

/**
 * FanGroup UpdateRequest.
 */
class UpdateRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
        ];
    }
}
