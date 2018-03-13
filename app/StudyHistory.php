<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class StudyHistory extends Model
{
    protected $table = 'study_histories';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student()
    {
      return $this->belongsTo("App\Student");
    }
}
