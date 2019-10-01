<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.09.2019
 * Time: 2:21
 */

namespace App\Helpers\Validator;

use Illuminate\Http\Request;

class RoleValidator extends Validator
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function rules()
    {
        return [
            "role_id" => "required|exists:roles,id"
        ];
    }
}