@extends('template')
@section('isicontent')
<div class="post-popup job_post">
        <div class="post-project">
            <h3>Post a Comment</h3>
            <div class="post-project-fields">
                <form action="/postcomm">
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Your Comment"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div><!--post-project-fields end-->
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div><!--post-project end-->
    </div> 
<section class="companies-info">
    <div class="post-bar">
                <div class="post_topbar">
                    <div class="usy-dt">
                        <div class="usy-name">
                            <h3>{{$discuss[0]->discuss_name}}</h3>
                            <span><img src="images/clock.png" alt="">3 min ago</span>
                        </div>
                    </div>
                    <div class="ed-opts">
                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                        <ul class="ed-options">
                            <li><a href="#" title="">Edit Post</a></li>
                            <li><a href="#" title="">Mark as Closed</a></li>
                            <li><a href="#" title="">Delete Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="job_descp">   
                    <p>
                        {{$discuss[0]->discuss_thread}}
                    </p>
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
    <div class="post-topbar">
        <div class="user-picy">
            <img src="images/resources/far-circle.png" alt="">
        </div>
        <div class="post-st">
            <ul>
                <li><a class="post-jb active" href="#" title="">Post Comment</a></li>
            </ul>
        </div><!--post-st end-->
    </div><!--post-topbar end-->
</section>	
	
@endsection