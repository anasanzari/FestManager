<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
				'fname' => 'required|max:255',
				'lname' => 'required|max:255',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|confirmed|min:6',
				'gender' => 'required',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		/* Sanand! Attention. Creating an Employee(type 0) by default! Figure out how customers and admins are created */
			return User::create([
					'fname' => $data['fname'],
					'lname' => $data['lname'],
					'email' => $data['email'],
					'password' => bcrypt($data['password']),
					'gender' => $data['gender'],
					'type' => 0
			]);
	}

}
