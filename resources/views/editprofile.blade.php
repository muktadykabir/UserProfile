@extends('layouts.profile')
@section('content')

<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="pcard">
						<!-- Card header -->
						<div class="pcard-header">
							<h3 class="mb-0">Profile Details</h3>
							<p class="mb-0">
								You have full control to manage your own account setting.
							</p>
						</div>
						<!-- Card body -->
						<div class="pcard-body">
							<div class="d-lg-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center mb-4 mb-lg-0">
									<div class="wrapper">
									<div _ngcontent-vpk-c18="" class="account-picture-container-border">
						
									<img _ngcontent-vpk-c18="" alt="Profile Picture" src="{{asset('asset/images/logo/profile.jpg')}}">
										<form action="{{url('profile/update')}}" method="post">
											<span _ngcontent-vpk-c18=""><i class="fas fa-portrait"></i><div class="btn btn-outline-danger btn-sm"><input type="file" id="myfile" name="myfile"><button class="btn btn-success">upload</button></div></span>
										</form>															
									
									</div>
									</div>
							
								</div>
							
							</div>
							<hr class="my-5">
							<div>
								<h4 class="mb-0">Personal Details</h4>
								<p class="mb-4">
									Edit your personal information and address.
								</p>
								<!-- Form -->
									<form action="{{url('profile/post')}}" method="post">
									@csrf
								<form class="row">
									<!-- First name -->
									@foreach ($users as $user)

									<div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="fname">First Name</label>
										<input type="text" id="fname" class="form-control" placeholder="{{$user->fname}}" required="">
									</div>
									<!-- Last name -->
									<div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="lname">Last Name</label>
										<input type="text" id="lname" class="form-control" placeholder="{{$user->lname}}" required="">
									</div>
									<!-- Phone -->
									<div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="phone">Phone</label>
										<input type="text" id="phone" class="form-control" placeholder="{{$user->number}}" required="">
									</div>
									<!-- Birthday -->
									<div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="birth">Birthday</label>
										<input class="form-control flatpickr flatpickr-input" type="date" placeholder="{{$user->dateofbirth}}" id="birth" name="birth" required="">
									</div>
									<!-- Address -->
									<div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="address">Address Line 1</label>
										<input type="text" id="address" class="form-control" placeholder="{{$user->address1}}" required="">
									</div>
									<!-- Address -->
									<div class="mb-3 col-12 col-md-6">
										<label class="form-label" for="address2">Address Line 2</label>
										<input type="text" id="address2" class="form-control" placeholder="{{$user->address2}}" required="">
									</div>
									<!-- State -->
									<div class="mb-3 col-12 col-md-6">
										<label class="form-label">State</label>
										<input type="text" id="address2" class="form-control" placeholder="{{$user->state}}" required="">
									</div>
									<!-- Country -->
										<div class="mb-3 col-12 col-md-6">
										<label class="form-label">Country</label>
										<input type="text" id="address2" class="form-control" placeholder="{{$user->country}}" required="">
									</div>
									<div class="col-12">
										<!-- Button -->
										<a href="editprofile">
										<button id="update" class="btn btn-primary" type="submit">
											Update Profile
										</button></a>
										<script>
										$(document).ready(function(){
											$('#update').click(function(){
													Swal.fire(
													'The Internet?',
													'That thing is still around?',
													'question'
												)
											});
										
										)};
	
										</script>
										@if (session('profile_insert_status'))
											<div class="alert alert success">
									{{ session('profile_insert_status')}}
								</div>
										@endif
									
									</div>
									@endforeach
								</form>
									</form>
						
							</div>
						</div>
					</div>
				</div>
@endsection