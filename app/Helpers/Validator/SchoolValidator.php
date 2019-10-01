<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.09.2019
 * Time: 14:29
 */
namespace App\Helpers\Validator;

use Illuminate\Http\Request;

class SchoolValidator extends Validator
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function rules()
    {
        return [
            'id' => 'nullable|exists:schools,id',
            'full_name' => "required|string",
            'number' => "required|numeric",
            'short_name' => "required|string",
            'type' => "required|numeric",
            'address' => "required|string",
        ];
    }
}