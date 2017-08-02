<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Patient_investigation extends Model
{
	 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'patient_investigations';
    protected $fillable = ['status'];
}
