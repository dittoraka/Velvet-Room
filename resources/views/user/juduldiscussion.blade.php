@extends('template')
@section('isicontent')
    
<div class="search-sec">
    <div class="container">
        <div class="search-box">
            <form>
                <input type="text" name="search" placeholder="Search keywords">
                <button type="submit">Search</button>
            </form>
        </div><!--search-box end-->
    </div>
</div><!--search-sec end-->
<div class="post-popup job_post">
    <div class="post-project">
        <h3>Post a Discussion</h3>
        <div class="post-project-fields">
            <form action="/postdis">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title">
                    </div>
                    <div class="col-lg-12">
                        <textarea name="description" placeholder="Your Post Here"></textarea>
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
</div><!--post-project-popup end-->
<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="filter-secs">
                            <div class="filter-heading">
                                <h3>Create Your Discussion</h3>
                            </div><!--filter-heading end-->
                            <div class="paddy">
                                <div class="post-st">
                                    <ul>
                                        <li><a class="post-jb active" href="#" title="">Post a Discussion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--filter-secs end-->
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="main-ws-sec">
                            <div class="posts-section">
                                @foreach ($discuss as $item)
                                    @if ($item->id_user != 0)
                                    <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <div class="usy-name">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job_descp">
                                                <h3>{{$item->discuss_name}}</h3>
                                                <p>{{$item->discuss_thread}}</p>
                                            </div>
                                            <form action="/getdiscussion" method="get">
                                                <input type="hidden" name="iddis" value="{{$item->id_discussion}}">
                                                <button type="submit" class="btn btn-warning" style="color:white;">Detail</button>
                                            </form>
                                        </div>    
                                    @endif
                                @endforeach
                            </div><!--posts-section end-->
                        </div><!--main-ws-sec end-->
                    </div><!--right-sidebar end-->
                </div>
            </div><!-- main-section-data end-->
        </div> 
    </div>
</main>
	
@endsection