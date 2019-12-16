@extends('templateadmin')<!--header end-->	

@section('isicontent')
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

@endsection