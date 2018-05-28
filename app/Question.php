<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Esensi\Model\Model;

class Question extends Model
{
    protected $rules = [ //protected keyword is so that the array can't be changed
      'title' => ['required'],
      'description' => ['required'],
    ];
}