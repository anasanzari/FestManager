<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fest extends Model {

	protected $table = 'fests';
	public $timestamps = false;
	protected $fillable = ['name','fromDate','toDate','department','imgUrl'];
	public $dates = ['fromDate','toDate'];

	public function events(){
			return $this->hasMany('App\Event','festid');
	}

}
