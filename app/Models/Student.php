<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'enrollment_number', 'document_type', 'document', 'birthday_date', 'school_class_id'
    ];

    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
