<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    protected $table = 'students';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function studyHistories()
    {
        return $this->hasMany("App\StudyHistory","student_id");
    }
    public function workHistories()
    {
        return $this->hasMany("App\WorkHistory","student_id");
    }
}
