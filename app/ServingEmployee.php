<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServingEmployee extends Model
{
    protected $fillable = ['fname','lname','email','phoneNo','father_name','mother_name','PhouseNo','Plocation','Pstreet','Pthana',
                            'Pdistrict','Ppostcode','RhouseNo','Rlocation','Rstreet','Rthana','Rdistrict','Rpostcode','dob','job_title'];
}
