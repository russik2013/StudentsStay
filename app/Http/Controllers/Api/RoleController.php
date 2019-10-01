<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Validator\RoleValidator;
use App\Transformers\Client\SuccessTransformer;

class RoleController extends MainController
{
    public function setUserRole(RoleValidator $request)
    {
        $this->user->role_id = (string)$request->role_id;
        $this->user->save();

        return (new SuccessTransformer)->transform('saved');
    }
}
