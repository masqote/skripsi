@extends('layouts.master')

@section('content')

<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add User
                </div>
                <div class="panel-body">

                	<!-- Form -->
                	<form action="/add_user" method="post">
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Fullname</label>
						      <input type="text" class="form-control" id="fullname" placeholder="Enter Your Fullname" name="fullname" required="" autocomplete="off">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Email Address</label>
						      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address" required="">
						    </div>
						  </div>
						  <div class="form-row">
						   	<div class="form-group col-md-6">
						      <label for="inputPassword4">Password</label>
						      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required="">
						    </div>
						   <!--  <div class="form-group col-md-6">
						      <label for="inputPassword4">Confirm Password</label>
						      <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Your Password" required="">
						    </div> -->
						   </div>
						    <div class="form-group col-md-6">
						      <label for="inputZip">User Status</label>
						      <select id="inputState" class="form-control" name="user_status">
						      	<option value="1">Administrator</option>
						      	<option value="2">User</option>
						      </select>
						    </div>
						  
						  <div class="form-group col-md-1">
						  <input type="submit" class="btn btn-primary" name="submit" value="Add User" >
						  {{ csrf_field() }}
						  </div>
						</div>
					</form>
                </div>

            </div>
    </div>

 @endsection