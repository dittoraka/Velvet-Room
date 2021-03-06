@extends('template')
@section('isicontent')
<section class="cover-sec">
        <div class="post-popup job_post">
                <div class="post-project">
                    <h3>Change Background</h3>
                    <div class="post-project-fields">
                            <form action="/gantiback" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <input type="file" name="picture">
                                            <li><button class="active" type="submit">Submit</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                    </div><!--post-project-fields end-->
                    <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                </div><!--post-project end-->
            </div>
        <img src="background/{{session("back")}}" style="height:500px" alt="">
    <div class="add-pic-box">
        <div class="container">
            <div class="row no-gutters">
                    <div class="post-st">
                        <ul>
                            <li><a class="post-jb active" href="#" title="">Change Background Image</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</section>
<div class="post-popup pst-pj">
        <div class="post-project">
            <h3>Change Picture</h3>
            <div class="post-project-fields">
                <form action="/gantifoto" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <ul>
                                <input type="file" name="picture">
                                <li><button class="active" type="submit">Submit</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div><!--post-project-fields end-->
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div><!--post-project end-->
    </div>

<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="main-left-sidebar">
                            <div class="user_profile">
                                <div class="user-pro-img">
                                <img src="profil/{{session("profil")}}" alt="">
                                    <div class="add-dp" id="OpenImgUpload">
                                    </div>
                                </div><!--user-pro-img end-->
                                <div class="post-st">
                                        <ul>
                                            <li><a class="post-jb active" href="#" style="margin-bottom:15px;">Change Profile Picture</a></li>
                                        </ul>
                                </div>
                                <div class="user_pro_status">
                                    <ul class="flw-status">
                                        <li>
                                            <span>Badges</span>
                                            <b>0</b>
                                        </li>
                                        <li>
                                            <span>Achievement</span>
                                            <b>@if ($achiev == null)
                                                {{0}}
                                            @else
                                                {{$achiev}}
                                            @endif</b>
                                        </li>
                                    </ul>
                                </div><!--user_pro_status end-->
                                
                            </div><!--user_profile end-->
                            <!--suggestions end-->
                        </div><!--main-left-sidebar end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="main-ws-sec">
                            <div class="user-tab-sec rewivew">
                                <h3>{{session('nickname')}}</h3>
                                <a href="/ava" title="" class="btn btn-outline-success" style="margin-bottom:15px;">Edit Avatar</a>
                                <div class="star-descp">
                                    <span>Gamer Kelas 0</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <a href="#" title="">Status</a>
                                </div><!--star-descp end-->
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
                                    @foreach ($user as $item)
                                    @if ($item==null)
                                        
                                    @else
                                    <div class="post-bar">
                                            <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="profil/{{session("profil")}}" style="width:50px;height:50px" alt="">
                                                        <div class="usy-name">
                                                            <h3>{{$item->nama_user}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                                <form action="/deletepost">
                                                                    <input type="hidden" name="id" value={{$item->id_post}}>
                                                                    <button type="submit">Delete</a>
                                                                    </form>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="job_descp">
                                                    @if ($item->post == null)
                                                        <span><img src="upload/{{$item->gambar}}" alt=""></span>
                                                    @else
                                                        <p>{{$item->post}}</p>
                                                    @endif
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                                <form action="/postlike">
                                                                    <input type="hidden" name="id" value={{$item->id_post}}>
                                                                    <button type="submit"><i class="fas fa-heart"></i> Like</a>
                                                                    </form>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>{{$item->likes}}</span>
                                                        </li> 
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment {{$item->likes}}</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    @foreach ($komen as $ko)
                                                        @if ($ko->id_post == $item->id_post)
                                                            <h2 style="font-weight:bold">{{$ko->nickname}}<h2>
                                                            {{$ko->comments}}
                                                            <div class="ed-opts">
                                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                                    <ul class="ed-options">
                                                                            <form action="/deletekomenpost">
                                                                            <input type="hidden" name="id" value={{$ko->id_commentuser}}>
                                                                            <button type="submit">Delete</a>
                                                                            </form>
                                                                    </ul>
                                                            </div>
                                                        @endif
                                                    </br>
                                                    @endforeach
                                                </div>
                                                <div class="post-topbar">
                                                        <form action="/komen">
                                                            <input type="text" name="komen" placeholder="Write something.">
                                                            <input type="hidden" name="id" value={{$item->id_post}}>
                                                            <button type="submit">Comment</button>
                                                        </form><!--post-st end-->
                                                </div>
                                            </div>     
                                    @endif
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
                            <div class="product-feed-tab" id="portfolio-dd">
                                <div class="portfolio-gallery-sec">
                                    <h3>Gallery</h3>
                                    <div class="portfolio-btn">
                                        <a href="#" title=""><i class="fas fa-plus-square"></i> Add Gallery</a>
                                    </div>
                                    <div class="gallery_pf">
                                        <div class="row">
                                            @foreach ($user as $item)
                                                @if ($item->gambar != null)
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="upload/{{$item->gambar}}" alt="">
                                                            
                                                            <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                        </div><!--gallery_pt end-->
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div><!--gallery_pf end-->
                                </div><!--portfolio-gallery-sec end-->
                            </div><!--product-feed-tab end-->
                        </div><!--main-ws-sec end-->
                    </div>
                    <div class="col-lg-3">
                        <div class="right-sidebar">
                            <div class="message-btn">
                                <a href="users/profile-account-setting" title=""><i class="fas fa-cog"></i> Setting</a>
                            </div>
                            <div class="widget widget-portfolio">
                                <div class="wd-heady">
                                    <h3>Gallery</h3>
                                    <img src="images/photo-icon.png" alt="">
                                </div>
                                <div class="pf-gallery">
                                    <ul>
                                        @foreach ($user as $item)
                                            @if ($item->gambar != null)
                                                    <div style="width:100px;display:inline-block">
                                                        <li style="width:100%;display:inline-flex"><a href="#" title=""><img src="upload/{{$item->gambar}}" style="width:100px" alt=""></a></li>
                                                    </div><!--gallery_pt end-->
                                            @endif
                                        @endforeach
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



<div class="overview-box" id="overview-box">
    <div class="overview-edit">
        <h3>Overview</h3>
        <span>5000 character left</span>
        <form>
            <textarea></textarea>
            <button type="submit" class="save">Save</button>
            <button type="submit" class="cancel">Cancel</button>
        </form>
        <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div><!--overview-edit end-->
</div><!--overview-box end-->


<div class="overview-box" id="experience-box">
    <div class="overview-edit">
        <h3>Experience</h3>
        <form>
            <input type="text" name="subject" placeholder="Subject">
            <textarea></textarea>
            <button type="submit" class="save">Save</button>
            <button type="submit" class="save-add">Save & Add More</button>
            <button type="submit" class="cancel">Cancel</button>
        </form>
        <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div><!--overview-edit end-->
</div><!--overview-box end-->

<div class="overview-box" id="education-box">
    <div class="overview-edit">
        <h3>Education</h3>
        <form>
            <input type="text" name="school" placeholder="School / University">
            <div class="datepicky">
                <div class="row">
                    <div class="col-lg-6 no-left-pd">
                        <div class="datefm">
                            <input type="text" name="from" placeholder="From" class="datepicker">	
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 no-righ-pd">
                        <div class="datefm">
                            <input type="text" name="to" placeholder="To" class="datepicker">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <input type="text" name="degree" placeholder="Degree">
            <textarea placeholder="Description"></textarea>
            <button type="submit" class="save">Save</button>
            <button type="submit" class="save-add">Save & Add More</button>
            <button type="submit" class="cancel">Cancel</button>
        </form>
        <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div><!--overview-edit end-->
</div><!--overview-box end-->

<div class="overview-box" id="location-box">
    <div class="overview-edit">
        <h3>Location</h3>
        <form>
            <div class="datefm">
                <select>
                    <option>Country</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="england">England</option>
                    <option value="india">India</option>
                    <option value="usa">United Sates</option>
                </select>
                <i class="fa fa-globe"></i>
            </div>
            <div class="datefm">
                <select>
                    <option>City</option>
                    <option value="london">London</option>
                    <option value="new-york">New York</option>
                    <option value="sydney">Sydney</option>
                    <option value="chicago">Chicago</option>
                </select>
                <i class="fa fa-map-marker"></i>
            </div>
            <button type="submit" class="save">Save</button>
            <button type="submit" class="cancel">Cancel</button>
        </form>
        <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div><!--overview-edit end-->
</div><!--overview-box end-->

<div class="overview-box" id="skills-box">
    <div class="overview-edit">
        <h3>Skills</h3>
        <ul>
            <li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
            <li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
            <li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
        </ul>
        <form>
            <input type="text" name="skills" placeholder="Skills">
            <button type="submit" class="save">Save</button>
            <button type="submit" class="save-add">Save & Add More</button>
            <button type="submit" class="cancel">Cancel</button>
        </form>
        <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div><!--overview-edit end-->
</div><!--overview-box end-->

<div class="overview-box" id="create-portfolio">
    <div class="overview-edit">
        <h3>Create Gallery</h3>
        <form>
            <input type="text" name="pf-name" placeholder="Portfolio Name">
            <div class="file-submit">
                <input type="file" id="file">
                <label for="file">Choose File</label>	
            </div>
            <div class="pf-img">
                <img src="images/resources/np.png" alt="">
            </div>
            <input type="text" name="website-url" placeholder="htp://www.example.com">
            <button type="submit" class="save">Save</button>
            <button type="submit" class="cancel">Cancel</button>
        </form>
        <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div><!--overview-edit end-->
</div><!--overview-box end-->

</div>
@endsection