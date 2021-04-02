<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade', 'type', 'active'
    ];

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function getRightTypeAttribute()
    {
        switch ($this->type) {
            case 'ensino_infantil':
                return 'Ensino Infantil';
            case 'ensino_fundamental':
                return 'Ensino Fundamental';
            case 'ensino_medio':
                return 'Ensino Médio';
        }
    }
}
