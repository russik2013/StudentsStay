<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'id',
        'full_name',
        'number',
        'short_name',
        'type',
        'address',
    ];

    public static $table_updated_fields = [
        'id',
        'full_name',
        'number',
        'short_name',
        'type',
        'address',
    ];

    public function addNewSchool(array $data) : School
    {
        $this -> fill($data);
        $this -> save();
        return $this;
    }

    public function getAllSchools(array $filters = [])
    {
        $query = self::query();
        if(isset($filters['id']) && !empty($filters['id']) && !is_null($filters['id'])){
            $query->where('id', $filters['id']);
        }
        return $query->get();
    }

    public function updateSchool(array $data)
    {
        if(isset($data['id']) && !empty($data['id']) && !is_null($data['id'])){
           self::query()->where('id', $data['id'])
               ->update($data);
        }
    }
}
