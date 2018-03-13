<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class WorkHistory extends Model
{
    protected $table = 'work_histories';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student()
    {
      return $this->belongsTo("App\Student");
    }
}
