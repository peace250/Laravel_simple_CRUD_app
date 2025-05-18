<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
     protected $primaryKey ='candidate_id';
    protected $fillable=['first_name','last_name','gender','dob','exam_date','phone_number'];

}
