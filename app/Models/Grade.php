<?php

namespace App\Models;
use App\Models\Candidate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $primaryKey ='grade_id';
    protected $fillable=[
    'license_exam_category',
    'obtained_marks',
    'decision',
    'candidate_id'
];

    public function candidate(){
        //candidate_id: foreign key in relationship
      return   $this->belongsTo(Candidate::class,'candidate_id');
    }
}
