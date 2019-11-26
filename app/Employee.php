<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = "rrhh.employees";

    public function getFullName()
    {
    	$first_name = $this->first_name??'';
    	$last_name = $this->last_name??'';
    	$mother_last_name = $this->mother_last_name??'';
    	return $first_name.' '.$last_name.' '.$mother_last_name;
    }

    public function management()
    {
    	return $this->belongsTo('App\Management');
    }
}
