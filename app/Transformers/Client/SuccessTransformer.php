<?php
namespace App\Transformers\Client;
use App\Transformers\Abstracts\Transformer;

/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.08.2018
 * Time: 22:16
 */

class SuccessTransformer extends Transformer
{
    public function transform($data)
    {
        return \response()->json([
            "status" => "success",
            "message" => "",
            "data" => $data,
        ]);
    }
}