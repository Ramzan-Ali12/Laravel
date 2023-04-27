<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Education', 'Designation','Department'];
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student__subjects', 'student_id','subject_id');
    }
    use HasFactory;
}