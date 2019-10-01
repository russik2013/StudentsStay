<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.09.2019
 * Time: 2:09
 */

namespace App\Helpers\Validator;

use App\Exceptions\CustomException;
use App\Transformers\Client\ErrorTransformer;
use App\Transformers\Validator\TransformValidateError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator as Valid;
use Exception;
use Illuminate\Foundation\Http\FormRequest;

abstract class Validator extends FormRequest
{

    public $request;
    private $rules;
    private $result;
    private $mainValidator = ['token' => 'required'];


    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->rules = $this->rules();
        $this->result = $this->validateRequest();

        if(!$this->validateRequest()){
            throw new CustomException($this->result);
        }
    }

    public function authorize()
    {
        return true;
    }


    public function validateRequest()
    {
        $validator = Valid::make($this->request->all(), $this->rules);
        if ($validator->fails()) {
            $this->result = (new ErrorTransformer())->transform(TransformValidateError::transformValidateMessage($validator));
            return false;
        }
        $this->result = $this->request;
        return true;
    }

    public function getResult()
    {
        return $this->result;
    }
    abstract function rules();
}