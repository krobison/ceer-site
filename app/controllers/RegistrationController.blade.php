<?php

class RegistrationController extends BaseController {

	public function showRegister(){
		return View::make('register');
	}

	public function registerUser(){
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->passes()) {
			try{
				$user = new User;

				$user->first_name = Input::get('first');
				$user->middle_name = Input::get('middle');
				$user->last_name = Input::get('last');

				$user->email = Input::get('email');
				$user->password = Hash::make(Input::get('password'));

				$user->address_1 = Input::get('address1');
				$user->address_2 = Input::get('address2');
				$user->phone = Input::get('phone');

				$user->city = Input::get('city');
				$user->state = Input::get('state');
				$user->zip = Input::get('zip');

				$user->type = 1;

				$user->category = Input::get('category');

				if(Input::get('csm_checkbox') == "on"){
					$user->university = "CSM";
				}else{
					$user->university = Input::get('university');
				}

				$user->degree = Input::get('degree');
				$user->department = Input::get('department');
				$user->position = Input::get('position');
				$user->employer = Input::get('employer');
				$user->job = Input::get('job');

				$user->description = Input::get('description');

				$user->save();
			}catch( Exception $e ) {
				return Redirect::to('register')->with('message', 'danger;<strong>Oh No!</strong> Your profile could not be created at this time.')->withInput(Input::except('password','password_confirmation','photo'));
			}
		}
		return Redirect::to('register')->with('message','danger;<strong>Oh No!</strong> '.$validator->messages()->first())->withInput(Input::except('password','password_confirmation'));
	}
}
