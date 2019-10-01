<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $student = 1;

    public $teacher = 2;

    public $director = 3;

    public $admin = 4;
    
    protected $fillable = ['name', 'nameAlias'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function getRolesList()
    {
        return $this::all();
    }

}
