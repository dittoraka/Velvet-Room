
		@extends('templateadmin')<!--header end-->	

		@section('isicontent')
		<div class="col-lg-6">
				<div class="login-sec">
					<ul class="sign-control">
						<li data-tab="tab-1" class="current"><a href="#" title="">Update</a></li>			
					</ul>			
					<div class="sign_in_sec current" id="tab-1">
						 <!-- <h3>Isi data Diri anda di bawah ini</h3> -->
						 <h3>Update</h3>
						<form action="/updateuser" method="POST">
							@csrf
							   
								<div class="row">
									<div class="col-lg-12 no-pdd">
										<div class="sn-field">
												<select name="username">
														@foreach ($user as $item)
															<option value="{{$item->username}}">{{$item->username}}</option>
														@endforeach
												</select>
											<i class="la la-user"></i>
										</div>
									</div>
									<div class="col-lg-12 no-pdd">
											<div class="sn-field">
												<input type="text" name="email" placeholder="Email">
												<i class="la la-user"></i>
											</div>
									</div>
									<div class="col-lg-12 no-pdd">
										<div class="sn-field">
											<input type="text" name="nickname" placeholder="nickname">
											<i class="la la-user"></i>
										</div>
									</div>
									<!-- <div class="col-lg-12 no-pdd">
										<div class="sn-field">
											<select>
												<option>Category</option>
												<option>Category 1</option>
												<option>Category 2</option>
												<option>Category 3</option>
												<option>Category 4</option>
											</select>
											<i class="la la-dropbox"></i>
											<span><i class="fa fa-ellipsis-h"></i></span>
										</div>
									</div> -->
									<div class="col-lg-12 no-pdd">
										<div class="sn-field">
											<input type="password" name="password" placeholder="Password Lama">
											<i class="la la-lock"></i>
										</div>
									</div>
									<div class="col-lg-12 no-pdd">
										<div class="sn-field">
											<input type="password" name="newpassword" placeholder="Password Baru">
											<i class="la la-lock"></i>
										</div>
									</div>
									<div class="col-lg-12 no-pdd">
										<button type="submit" value="submit">Update</button>
									</div>
								</div>
						</form>
						<!--login-resources end-->
					</div><!--sign_in_sec end-->	
				</div>
		@endsection