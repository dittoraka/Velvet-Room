@extends('template')
@section('isicontent')
<div class="post-popup pst-pj">
        <div class="post-project">
            <h3>Post a Status</h3>
            <div class="post-project-fields">
                <form action="/diskusi">
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Tell about Your Day here .." value="default"></textarea>
                        </div>
                        <input type="hidden" name="id" value={{$discuss[0]->id_discussion}}>
                    </div>
                    <input type="submit" value="">
                </form>
            </div><!--post-project-fields end-->
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div><!--post-project end-->
    </div><!--post-project-popup end-->
    <div class="post-popup job_post">
            <div class="post-project">
                <h3>Edit Comment</h3>
                <div class="post-project-fields">
                    <form action="/deletekomendis">
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="description" placeholder="Your Post Here"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <ul>
                                    <li><button class="active" type="submit" value="post">Save</button></li>
                                    <li><button class="active" type="submit" value="delete">Delete</button></li>
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
                                <li>
                                <form action="/deletedis">
                                    <input type="hidden" name="id" value={{$discuss[0]->id_discussion}}>
                                    <button type="submit" class="btn btn-primary-outline">Delete</a>
                                    </form>
                                </li>
                                    <li>
                                            <form action="/reportdis">
                                            <input type="hidden" name="id" value={{$discuss[0]->id_discussion}}>
                                            <button type="submit" class="btn btn-primary-outline">Report</a>
                                            </form>
                                    </li>
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
                            <form action="/ngelike">
                            <input type="hidden" name="id" value={{$discuss[0]->id_discussion}}>
                            <button type="submit"><i class="fas fa-heart"></i> Like</a>
                            </form>
                            <img src="images/liked-img.png" alt="">
                            <span>{{$discuss[0]->likes}}</span>
                        </li> 
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment </a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
                @foreach ($komen as $item)
                    @if ($item->id_dis == $discuss[0]->id_discussion)
                        <h2 style="font-weight:bold">{{$item->nickname}}<h2>
                            {{$item->text}}
                        </br>
                        <div class="ed-opts">
                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                            <ul class="ed-options">
                                    <form action="/deletekomendis">
                                    <input type="hidden" name="id" value={{$item->dis_comment_id}}>
                                    <button type="submit">Delete</a>
                                    </form>
                            </ul>
                        </div>
                    @endif
                @endforeach
    </div><!--post-bar end-->
    <div class="post-topbar">
        <div class="user-picy">
            <img src="profil/{{session('profil')}}" alt="">
        </div>
        <li><a class="post_project" href="#" title="">Post Status</a></li>
    </div><!--post-topbar end-->
</section>	
	
@endsection