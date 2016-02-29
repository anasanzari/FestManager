<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model {

	protected $table = 'register';
	public $timestamps = true;
	protected $fillable = ['userid','eventid'];


}
