<?php

namespace TMFW\Foundation\Base\User;

use Illuminate\Support\Facades\Auth;
use TMFW\Foundation\BaseRequest;

class Request extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $form = array();
//        $form['name'] = 'required';

        return $form;
    }
}
