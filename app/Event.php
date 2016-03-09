<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	protected $table = 'events';
	public $timestamps = false;
	protected $fillable = ['name','festid','details','venue','date','manager','contact'];

	public function fest(){
		return $this->belongsto('App\Fest','festid');
	}

}
