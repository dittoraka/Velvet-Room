
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise-new/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 15:39:16 GMT -->
<head>
	<meta charset="UTF-8">
	<title>WorkWise Html Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <style>
        table,th,td{
            border:1px solid black;
            padding: 10px;
            margin: 15px;
        }
    </style>
</head>


<body oncontextmenu="return false;">	
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="logometa2.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="adminhome" title="">
									<span><img src="images/icon4.png" alt=""></span>
									User
								</a>
							</li>
							<li>
								<a href="achievement.html" title="">
									<span><img src="images/icon2.png" alt=""></span>
									Blocked
								</a>
							</li>
							<li>
								<a href="projects.html" title="">
									<span><img src="images/icon3.png" alt=""></span>
									Discussion
								</a>
							</li>
							<li>
								<a href="profiles.html" title="">
									<span><img src="images/icon3.png" alt=""></span>
									Post
								</a>
								<ul>
									<li><a href="user-profile.html" title="">User Profile</a></li>
									<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
								</ul>
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="images/resources/r-img4.png" alt="">
							<a href="#" title="">Admin</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							<h3>Online Status</h3>
							<ul class="on-off-status">
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c5">
										<label for="c5">
											<span></span>
										</label>
										<small>Online</small>
									</div>
								</li>
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c6">
										<label for="c6">
											<span></span>
										</label>
										<small>Offline</small>
									</div>
								</li>
							</ul>
							<h3>Custom Status</h3>
							<div class="search_form">
								<form>
									<input type="text" name="search">
									<button type="submit">Ok</button>
								</form>
							</div><!--search_form end-->
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->	
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
		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
					<img class="fl-rgt" src="images/logo2.png" alt="">
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 15:39:24 GMT -->
</html>