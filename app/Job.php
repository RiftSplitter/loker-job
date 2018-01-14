<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'job_id';
    public $timestamps = false;

    public function company() {
    	return $this->belongsTo('App\Company', 'company_id');
    }
}
