@extends('template')

@section('isicontent')

<main>
    <div class="main-section">
        <div class="container"> 
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                        <div class="main-left-sidebar no-margin">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="username-dt">
                                        <div class="usr-pic">
                                            <img src="profil/{{session("profil")}}" alt="">
                                        </div>
                                    </div><!--username-dt end-->
                                    <div class="user-specs">
                                        <h3>{{ session('nickname')}}</h3>
                                        <span>Good Person ! ☺</span>
                                    </div>
                                </div><!--user-profile end-->
                                <ul class="user-fw-status">
                                    <li>
                                        <h4>Badges</h4>
                                        <span>17</span>
                                    </li>
                                    <li>
                                        <h4>Achievement</h4>
                                        <span>33</span>
                                    </li>
                                    <li>
                                        <a href="my-profile-feed" title="">View Profile</a>
                                    </li>
                                    <li>
                                        <a href="showMessage" title="">View Message</a>
                                    </li>
                                </ul>
                            </div><!--user-data end-->
                            
                        </div><!--main-left-sidebar end-->
                    </div>
                    <div class="col-lg-6 col-md-8 no-pd">
                        <div class="main-ws-sec">
                            <div class="post-topbar">
                                <div class="user-picy">
                                    <img src="profil/{{session("profil")}}" alt="">
                                </div>
                                <div class="post-st">
                                    <ul>
                                        <li><a class="post_project" href="#" title="">Post Status</a></li>
                                    </ul>
                                </div><!--post-st end-->
                            </div><!--post-topbar end-->
                            <div class="posts-section">
                                @foreach ($post as $item)
                                @if ($item==null)
                                    
                                @else
                                <div class="post-bar">
                                        <div class="post_topbar">
                                                <div class="usy-dt">
                                                    @foreach ($user as $key)
                                                        @if ($item->id_user == $key->id_user))
                                                            <img src="profil/{{$key->profil_picture}}" style="width:50px;height:50px" alt="">
                                                        @endif
                                                    @endforeach
                                                    <div class="usy-name">
                                                        <h3>{{$item->nama_user}}</h3>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                            <li>
                                                                    <form action="/editpost">
                                                                    <input type="hidden" name="id" value={{$item->id_post}}>
                                                                    <button type="submit" class="btn btn-primary-outline">Edit</a>
                                                                    </form>
                                                            </li>
                                                            <li>
                                                            <form action="/deletepost">
                                                                <input type="hidden" name="id" value={{$item->id_post}}>
                                                                <button type="submit" class="btn btn-primary-outline">Delete</a>
                                                                </form>
                                                            </li>
                                                                <li>
                                                                        <form action="/reportpost">
                                                                        <input type="hidden" name="id" value={{$item->id_post}}>
                                                                        <button type="submit" class="btn btn-primary-outline">Report</a>
                                                                        </form>
                                                                </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="job_descp">
                                                    @if ($item->post!=null && $item->gambar!=null )
                                                    <span style="word-wrap:break-word">{{$item->post}}<span>
                                                    <span><img src="upload/{{$item->gambar}}" alt=""></span>
                                                @else
                                                    <span>{{$item->post}}</span>
                                                @endif
                                                @if ($item->post == null)
                                                    <span><img src="upload/{{$item->gambar}}" alt=""></span>
                                                @endif
                                                
                                                
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                            <form action="/postlike">
                                                                <input type="hidden" name="id" value={{$item->id_post}}>
                                                                <?php $bol=true; ?>
                                                                @foreach ($like as $lik)
                                                                    @if ($lik->id_post == $item->id_post && $lik->id_user == session('iduser'))
                                                                        <?php $bol=false; ?>
                                                                    @endif
                                                                @endforeach
                                                                    @if ($bol)
                                                                        <button type="submit"><i class="fas fa-heart"></i> Like</a>
                                                                    @else
                                                                        <button type="submit"><i class="fas fa-heart"></i> Unlike</a>
                                                                    @endif
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
                                                        <span style="word-wrap:break-word">{{$ko->comments}}<span>
                                                        <div class="ed-opts">
                                                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                                <ul class="ed-options">
                                                                    <li>
                                                                        <form action="/deletekomenpost">
                                                                        <input type="hidden" name="id" value={{$ko->id_commentuser}}>
                                                                        <button type="submit" class="btn btn-primary-outline">Delete</a>
                                                                        </form>
                                                                    </li>
                                                                    
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
                                    </div> 
                                <!--process-comm end-->
                            </div><!--posts-section end-->
                        </div><!--main-ws-sec end-->
                    </div> 
                        </div><!--right-sidebar end-->
                    </div>
                </div>
            </div><!-- main-section-data end-->
        </div> 
    </div>
</main>




<div class="post-popup pst-pj">
    <div class="post-project">
        <h3>Post a Status</h3>
        <div class="post-project-fields">
            <form action="/posting" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <textarea name="description" placeholder="Tell about Your Day here .." value="default"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <ul>
                            <input type="file" name="picture">
                            <li><button class="active" type="submit">Post</button></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div><!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div><!--post-project end-->
</div><!--post-project-popup end-->

<div class="post-popup job_post">
    <div class="post-project">
        <h3>Post a Discussion</h3>
        <div class="post-project-fields">
            <form>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title">
                    </div>
                    <div class="col-lg-12">
                        <div class="inp-field">
                            <select>
                                <option>Gaming</option>
                                <option>Lifestyle</option>
                                <option>Arts</option>
                                <option>Entertainment (Movie , Music , etc)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <textarea name="description" placeholder="Your Post Here"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <ul>
                            <li><button class="active" type="submit" value="post">Post</button></li>
                            <li><a href="#" title="">Cancel</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div><!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div><!--post-project end-->
</div><!--post-project-popup end-->



<div class="chatbox-list">
    {{-- <div class="chatbox">
        <div class="chat-mg">
            <a href="#" title=""><img src="images/resources/usr-img1.png" alt=""></a>
        </div>
        <div class="conversation-box">
            <div class="con-title mg-3">
                <div class="chat-user-info">
                    <img src="images/resources/us-img1.png" alt="">
                    <h3>John Doe <span class="status-info"></span></h3>
                </div>
                <div class="st-icons">
                    <a href="#" title=""><i class="la la-cog"></i></a>
                    <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                    <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                </div>
            </div>
            <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                <div class="chat-msg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                    <span>Sat, Aug 23, 1:10 PM</span>
                </div>
                <div class="date-nd">
                    <span>Sunday, August 24</span>
                </div>
                <div class="chat-msg st2">
                    <p>Cras ultricies ligula.</p>
                    <span>5 minutes ago</span>
                </div>
            </div><!--chat-list end-->
            <div class="typing-msg">
                <form>
                    <textarea placeholder="Type a message here"></textarea>
                    <button type="submit"><i class="fa fa-send"></i></button>
                </form>
                <ul class="ft-options">
                    <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                    <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                </ul>
            </div><!--typing-msg end-->
        </div><!--chat-history end-->
    </div> --}}
    <div class="chatbox">
        <div class="chat-mg bx">
            <a href="profiles" title=""><img src="images/chat.png"></a>
        </div>
        <div class="conversation-box">
            <div class="con-title">
                <h3>Messages</h3>
                <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
            </div>
            <div class="chat-list">
                @foreach ($user as $item)
                    @if ($item->username <> session('nama'))
                    <form action="/show-chat">
                    <input type="hidden" value={{$item->id_user}} name="id">
                    <button type="submit"class="btn btn-primary-outline">
                            <div class="conv-list">
                                    <div class="usy-info">
                                        <img src="profil/{{$item->profil_picture}}" style="width:50px;height:50px" alt="">
                                        <h3>{{$item->nickname}}</h3>
                                    </div>
                            </div>
                    </button>
                    </form>
                    @endif
                @endforeach
            </div><!--chat-list end-->
        </div><!--conversation-box end-->
    </div>
</div><!--chatbox-list end-->

</div><!--theme-layout end-->

@endsection