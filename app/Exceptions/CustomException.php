<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.09.2019
 * Time: 3:59
 */

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    private $answer;
    public function __construct($answer){
        $this->answer = $answer;
        //dd($request);
    }
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        //dd($request);
        return response()->json($this->answer);
    }
}