<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.09.2019
 * Time: 10:12
 */

namespace App\Helpers\Validator;

use Illuminate\Http\Request;

class MainValidator extends Validator
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function rules()
    {
        return [
            'token'         => 'required'
        ];
    }
}