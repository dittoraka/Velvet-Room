@extends('template')
@section('isicontent')
<section class="cover-sec">
    <img src="images/resources/cover-img.jpg" alt="">
</section>


<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="main-left-sidebar">
                            <div class="user_profile">
                                <div class="user-pro-img">
                                    <img src="images/resources/user-pro-img.png" alt="">
                                </div><!--user-pro-img end-->
                                <div class="user_pro_status">
                                    <ul class="flw-hr">
                                        <?php $bol = true;?>
                                        @foreach ($friend as $item)
                                            @if ($item->id_friend == $user[0]->id_user)
                                                <?=$bol=false;?>
                                            @endif
                                        @endforeach
                                        @if ($bol)
                                            <li><a href="/tambahteman" title="" class="flww"><i class="la la-plus"></i>Add Friend</a></li>
                                        @else
                                        <li><a href="/tambahteman" title="" class="flww"><i class="la la-plus"></i>Unfriend</a></li>
                                        @endif
                                    </ul>
                                    <ul class="flw-status">
                                        <li>
                                            <span>Friends</span>
                                            <b>34</b>
                                        </li>
                                    </ul>
                                </div><!--user_pro_status end-->
                            </div><!--user_profile end-->
                            <div class="suggestions full-width">
                                <div class="sd-title">
                                    <h3>Friend List</h3>
                                    <i class="la la-ellipsis-v"></i>
                                </div><!--sd-title end-->
                                <div class="suggestions-list">
                                    <div class="suggestion-usd">
                                        <img src="images/resources/s1.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Jessica William</h4>
                                            <span>Title</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="images/resources/s2.png" alt="">
                                        <div class="sgt-text">
                                            <h4>John Doe</h4>
                                            <span>Title</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="images/resources/s3.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Poonam</h4>
                                            <span>Title</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="images/resources/s4.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Bill Gates</h4>
                                            <span>Title</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="images/resources/s5.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Jessica William</h4>
                                            <span>Title</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="images/resources/s6.png" alt="">
                                        <div class="sgt-text">
                                            <h4>John Doe</h4>
                                            <span>Title</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
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
                            <div class="user-tab-sec">
                                <h3>@foreach ($user as $item)
                                    {{$item->nickname}}
                                @endforeach</h3>
                                <div class="star-descp">
                                    <span>Title Name</span>
                                </div><!--star-descp end-->
                                <div class="tab-feed">
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
                                                <span>Info</span>
                                            </a>
                                        </li>
                                        <li data-tab="portfolio-dd">
                                            <a href="#" title="">
                                                <img src="images/ic3.png" alt="">
                                                <span>Gallery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- tab-feed end-->
                            </div><!--user-tab-sec end-->
                            <div class="product-feed-tab current" id="feed-dd">
                                <div class="posts-section">
                                        @foreach ($post as $item)
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>{{session('nama')}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="job_descp">
                                                    <p>{{$item->post}}</p>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>{{$item->likes}}</span>
                                                        </li> 
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment {{$item->likes}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        @endforeach
                                    <div class="process-comm">
                                        <div class="spinner">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                    </div><!--process-comm end-->
                                </div><!--posts-section end-->
                            </div><!--product-feed-tab end-->
                            <div class="product-feed-tab" id="info-dd">
                                <div class="user-profile-ov">
                                    <h3>Overview</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                                </div><!--user-profile-ov end-->
                                <div class="user-profile-ov st2">
                                    <h3>Experience</h3>
                                    <h4>Web designer</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                    <h4>UI / UX Designer</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>
                                    <h4>PHP developer</h4>
                                    <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                </div><!--user-profile-ov end-->
                                <div class="user-profile-ov">
                                    <h3>Education</h3>
                                    <h4>Master of Computer Science</h4>
                                    <span>2015 - 2018</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                </div><!--user-profile-ov end-->
                                <div class="user-profile-ov">
                                    <h3>Location</h3>
                                    <h4>India</h4>
                                    <p>151/4 BT Chownk, Delhi </p>
                                </div><!--user-profile-ov end-->
                                <div class="user-profile-ov">
                                    <h3>Skills</h3>
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
                            <div class="product-feed-tab" id="portfolio-dd">
                                <div class="portfolio-gallery-sec">
                                    <h3>Gallery</h3>
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
                        </div><!--main-ws-sec end-->
                    </div>
                    <div class="col-lg-3">
                        <div class="right-sidebar">
                            <div class="message-btn">
                                <a href="#" title=""><i class="fa fa-envelope"></i> Message</a>
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