<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;



class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "name",
        "lastname",
        "document",
        "hometown",
        "birth_date",
        "school_id"         
    ];

    public function school()
    {
        return $this->belongsTo(School::class,"school_id");
    }
}
