<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'document_type', 'document', 'birthday_date', 'highest_degree', 'school_class_id'
    ];

    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
