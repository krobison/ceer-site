@extends('common.master')

@section('content_main')
<!-- CSS -->
{{ HTML::style('assets/css/view/register.css') }}

<div id="registration_div" class="well bs-component">
	<h2>Registration</h2>
	<div class="darkline"></div>
	<form class="form-horizontal" method="POST" action="{{URL::to('register_user')}}">
		<div class="subtitle">
			<h4>Account Information</h4>
			<div class="darkline"></div>
		</div>
		<div class="form-group">
			<label for="first" class="col-sm-2 control-label required-star">Name</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="first" id="first" placeholder="First Name" required>
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="middle" id="middle" placeholder="M.I. (Optional)">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="last"  id="last" placeholder="Last Name" required>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label required-star">Email</label>
			<div class="col-sm-5">
				<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
			</div>
			<div class="col-sm-5">
				<input type="email" class="form-control" name="email_confirmation" id="email_confirmation" placeholder="Confirm Email" required>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label required-star">Password</label>
			<div class="col-sm-5">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			</div>
			<div class="col-sm-5">
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
			</div>
		</div>
		<div class="subtitle">
			<div class="darkline"></div>
			<h4>Basic Information</h4>
			<div class="darkline"></div>
		</div>
		<div class="form-group">
			<label for="address1" class="col-sm-2 control-label required-star">Address 1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="address1" name="address1" placeholder="12345 Imagination Lane" required>
			</div>
		</div>
		<div class="form-group">
			<label for="address2" class="col-sm-2 control-label">Address 2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment/Suite/Building/Floor/etc.">
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="col-sm-2 control-label required-star">City</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="city" name="city" placeholder="New York" required>
			</div>
			<label for="state" class="col-sm-1 control-label required-star">State</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="state" name="state" placeholder="Alaska" required>
			</div>
			<label for="zip" class="col-sm-1 control-label required-star">Zip Code</label>
			<div class="col-sm-2">
				<input type="number" max="99999" maxlength="5" min="0" step="1" class="form-control" id="zip" name="zip" placeholder="00000" required>
			</div>
		</div>
		<div class="form-group">
			<label for="phone" class="col-sm-2 control-label">Phone</label>
			<div class="col-sm-2">
				<input type="tel" class="form-control" id="phone" name="phone" placeholder="###-###-####">
			</div>
		</div>
		<div class="subtitle">
			<div class="darkline"></div>
			<h4>CEER Information</h4>
			<div class="darkline"></div>
		</div>
		<div class="form-group">
			<label for="category" class="col-sm-2 control-label required-star">Category</label>
			<div class="col-sm-4">
				<select type="text" class="form-control" id="category" name="category" placeholder="Category">
					<option></option>
					<optgroup label="Participant">
						<option value="Literature Review Participant">Literature Review Participant</option>
						<option value="Oral Participant">Oral Participant</option>
						<option value="Poster Participant">Poster Participant</option>
					</optgroup>
					<optgroup label="Judge">
						<option value="Alumni Judge">Alumni Judge</option>
						<option value="Faculty Judge">Faculty Judge</option>
						<option value="Industry Judge">Industry Judge</option>
					</optgroup>
				</select>
			</div>
		</div>

		<div id="university_div" style="display:none;">
			<label for="category" class="col-sm-2 control-label required-star">University</label>
			<div class="form-group">
				<div class="col-sm-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" id="csm_checkbox" name="csm_checkbox" checked> Attending CSM
						</label>
					</div>
				</div>
			</div>
			<div class="form-group" id="uni_div" style="display:none;">
				<label for="university" class="col-sm-2 control-label required-star">University</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="university" name="university" placeholder="University">
				</div>
			</div>
		</div>

		 <div id="degree_div" style="display:none;">
			<div class="form-group">
			<label for="category" class="col-sm-2 control-label required-star">Degree</label>
				<div class="col-sm-3">
					<div class="radio">
						<label>
							<input type="radio" name="degree" id="degree_ms" value="degree_ms" checked>
							M.S.
						</label>
						<label></label>
						<label>
							<input type="radio" name="degree" id="degree_ms" value="degree_phd">
							Ph.D.
						</label>
					</div>
				</div>
			</div>
		 </div>

		<div id="department_div" style="display:none;">
		 	<div class="form-group">
				<label for="department" class="col-sm-2 control-label required-star">Department</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="department" name="department" placeholder="Department">
				</div>
			</div>
		</div>

		<div id="position_div" style="display:none;">
		 	<div class="form-group">
				<label for="position" class="col-sm-2 control-label required-star">Position</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="position" name="position" placeholder="Associate Professor, Full Professor, etc.">
				</div>
			</div>
		</div>

		<div id="industry_div" style="display:none;">
		 	<div class="form-group">
				<label for="employer" class="col-sm-2 control-label required-star">Employer</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="employer" name="employer" placeholder="Employer">
				</div>
			</div>
			 	<div class="form-group">
				<label for="job" class="col-sm-2 control-label required-star">Job Title</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="job" name="job" placeholder="Associate Professor, Full Professor, etc.">
				</div>
			</div>
		</div>

		<div id="description_div" style="display:none;" class="form-group">
			<label for="description" class="col-sm-2 control-label required-star">Description of Expertise</label>
			<div class="col-sm-5">
				<textarea class="form-control" id="description" name="description"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Register</button>
			</div>
		</div>

	</form>
</div>

{{ HTML::script('assets/js/register.js') }}
@stop
