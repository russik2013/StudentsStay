<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.11.2018
 * Time: 0:16
 */

namespace App\Transformers\Validator;

class TransformValidateError {

    public static function transformValidateMessage($validator)
    {
        foreach ($validator->errors()->messages() as $errors){
            foreach ($errors as $error){
                return $error;
            }
        }
        return null;
    }

}