@extends('template')
@section('isicontent')
    
		<section class="cover-sec">
			<img src="images/resources/cover-img.jpg" alt="">
			<div class="add-pic-box">
				<div class="container">
					<div class="row no-gutters">
						{{-- <div class="col-lg-12 col-sm-12">					
							<input type="file" id="file">
							<label for="file">Change Image</label>				
						</div> --}}
					</div>
				</div>
			</div>
		</section>


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user_pro_status">
											<ul class="flw-status">
												<li>
                                                    <span><button style="margin-top:20pt; padding:2pt;" type="submit" class="save">Join Group</button></span>
												</li>
												<li>
                                                    <span><button style="margin-top:20pt; padding:2pt;" type="submit" class="save">Photo</button></span>
												</li>
											</ul>
										</div><!--user_pro_status end-->
										
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Group Member</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<img src="images/resources/s1.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s2.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s3.png" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
											</div>
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec rewivew">
										<h3>Nama Group</h3>
                                            <div class="tab-feed st2 settingjb">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="images/ic1.png" alt="">
														<span>Feed</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="images/ic2.png" alt="">
														<span>Photo/Video</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="images/ic3.png" alt="">
														<span>Other</span>
													</a>
												</li>
												
												
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>User 1</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Delete</a></li>
														</ul>
													</div>
												</div>
												<div class="job_descp">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="fas fa-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li> 
														<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
													</ul>
													<a href="#"><i class="fas fa-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<div class="post-bar">
                                                    <div class="post_topbar">
                                                        <div class="usy-dt">
                                                            <img src="images/resources/us-pic.png" alt="">
                                                            <div class="usy-name">
                                                                <h3>User 1</h3>
                                                                <span><img src="images/clock.png" alt="">3 min ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="ed-opts">
                                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                            <ul class="ed-options">
                                                                <li><a href="#" title="">Edit Post</a></li>
                                                                <li><a href="#" title="">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="job_descp">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                    </div>
                                                    <div class="job-status-bar">
                                                        <ul class="like-com">
                                                            <li>
                                                                <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                                <img src="images/liked-img.png" alt="">
                                                                <span>25</span>
                                                            </li> 
                                                            <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                                        </ul>
                                                        <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                    </div>
                                            </div><!--post-bar end-->
											<div class="post-bar">
                                                    <div class="post_topbar">
                                                        <div class="usy-dt">
                                                            <img src="images/resources/us-pic.png" alt="">
                                                            <div class="usy-name">
                                                                <h3>User 1</h3>
                                                                <span><img src="images/clock.png" alt="">3 min ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="ed-opts">
                                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                            <ul class="ed-options">
                                                                <li><a href="#" title="">Edit Post</a></li>
                                                                <li><a href="#" title="">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="job_descp">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                    </div>
                                                    <div class="job-status-bar">
                                                        <ul class="like-com">
                                                            <li>
                                                                <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                                <img src="images/liked-img.png" alt="">
                                                                <span>25</span>
                                                            </li> 
                                                            <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                                        </ul>
                                                        <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                    </div>
                                            </div><!--post-bar end-->
										</div><!--posts-section end-->
                                    </div><!--product-feed-tab end-->
                                    
									<div class="product-feed-tab" id="info-dd">
                                            <div class="portfolio-gallery-sec">
                                                    <h3>Gallery</h3>
                                                    <div class="portfolio-btn">
                                                        <a href="#" title=""><i class="fas fa-plus-square"></i> Add Gallery</a>
                                                    </div>
                                                    <div class="gallery_pf">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img1.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img2.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img3.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img4.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img5.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img6.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img7.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img8.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img9.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                                <div class="gallery_pt">
                                                                    <img src="images/resources/pf-img10.jpg" alt="">
                                                                    <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                                </div><!--gallery_pt end-->
                                                            </div>
                                                        </div>
                                                    </div><!--gallery_pf end-->
                                            </div><!--portfolio-gallery-sec end-->
                                    </div><!--product-feed-tab end-->
                                    
									<div class="product-feed-tab" id="portfolio-dd">
                                            <div class="user-profile-ov">
                                                    <h3><a href="#" title="" class="overview-open">Overview</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                                                </div><!--user-profile-ov end-->
                                                <div class="user-profile-ov st2">
                                                    <h3><a href="#" title="" class="exp-bx-open">Experience </a><a href="#" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="exp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
                                                    <h4>Web designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                                    <h4>UI / UX Designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>
                                                    <h4>PHP developer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                                    <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                                </div><!--user-profile-ov end-->
                                                <div class="user-profile-ov">
                                                    <h3><a href="#" title="" class="ed-box-open">Education</a> <a href="#" title="" class="ed-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                                    <h4>Master of Computer Science</h4>
                                                    <span>2015 - 2018</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                                </div><!--user-profile-ov end-->
                                                <div class="user-profile-ov">
                                                    <h3><a href="#" title="" class="lct-box-open">Location</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                                    <h4>India</h4>
                                                    <p>151/4 BT Chownk, Delhi </p>
                                                </div><!--user-profile-ov end-->
                                                <div class="user-profile-ov">
                                                    <h3><a href="#" title="" class="skills-open">Skills</a> <a href="#" title="" class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-plus-square"></i></a></h3>
                                                    <ul>
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                        <li><a href="#" title="">Photoshop</a></li>
                                                        <li><a href="#" title="">Illustrator</a></li>
                                                        <li><a href="#" title="">Corel Draw</a></li>
                                                    </ul>
                                                </div><!--user-profile-ov end-->
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="profile-account-setting.html" title=""><i class="fas fa-cog"></i> Setting</a>
									</div>
									<div class="widget widget-portfolio">
										<div class="wd-heady">
											<h3>Gallery</h3>
											<img src="images/photo-icon.png" alt="">
										</div>
										<div class="pf-gallery">
											<ul>
												<li><a href="#" title=""><img src="images/resources/pf-gallery1.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery2.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery3.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery4.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery5.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery6.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery7.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery8.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery9.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery10.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery11.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery12.png" alt=""></a></li>
											</ul>
										</div><!--pf-gallery end-->
									</div><!--widget-portfolio end-->
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>
@endsection