<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Validator\SchoolValidator;
use App\School;
use App\Transformers\Client\SuccessTransformer;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function addSchool(SchoolValidator $request)
    {
       $school = (new School()) -> addNewSchool($request -> all());
       return (new SuccessTransformer) -> transform($school);
    }

    public function getAllSchool()
    {
        $schools = (new School()) -> getAllSchools();
        return (new SuccessTransformer) -> transform($schools);
    }

    public function getSchool($id)
    {
        $school = (new School()) -> getAllSchools(["id" => $id]);
        return (new SuccessTransformer) -> transform($school);
    }

    public function updateSchool(SchoolValidator $request)
    {
        (new School()) -> updateSchool($request -> only(School::$table_updated_fields));
        return (new SuccessTransformer) -> transform('school updates');
    }
}
