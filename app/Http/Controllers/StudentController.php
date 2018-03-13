<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\StudyHistory;

class StudentController extends Controller
{
    //
    public function index()
    {

      $result = array();

      $students = Student::all();

      foreach ($students as $student) {
        $one_student = array();
        $one_student["id"] = $student->id;
        $one_student["name"] = $student->name;
        $one_student["gender"] = $student->gender;
        $one_student["photo"] = $student->photo;
        $one_student["birthday"] = $student->birthday;
        $one_student["address"] = $student->address;
        $one_student["phone"] = $student->phone;

        $one_student["study_histories"] = array();
        foreach ($student->studyHistories as $study_history) {

          $one_study_history = array();
          $one_study_history["start_at"] = $study_history->start_at;
          $one_study_history["end_at"] = $study_history->end_at;
          $one_study_history["event"] = $study_history->event;

          $one_student["study_histories"][] = $one_study_history;

        }

        $one_student["work_histories"] = array();
        foreach ($student->workHistories as $work_history) {
          $one_work_history = array();
          $one_work_history["start_at"] = $work_history->start_at;
          $one_work_history["end_at"] = $work_history->end_at;
          $one_work_history["event"] = $work_history->event;

          $one_student["work_histories"][] = $one_work_history;
        }

        $result[] = $one_student;


      }


      return $result;


    }
}
