<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "address",
        "code_shool",
        "postal_code",
        "email",
        "phone",
        "phone2",
        "city",
        "country",
        "website"
    ];

    protected $cast = ["logo"=>"image"];

    public function student()
    {
        return $this->hasMany("App/Model/Student");
    }
}
