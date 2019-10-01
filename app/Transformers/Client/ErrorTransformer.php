<?php
namespace App\Transformers\Client;
use App\Transformers\Abstracts\Transformer;

/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.08.2018
 * Time: 22:16
 */

class ErrorTransformer extends Transformer
{
    public function transform($message)
    {
        return \response()->json([
            "status" => "server error",
            "message" => $message,
            "data" => null,
        ]);
    }
}