@extends('template')

@section('isicontent')
<div class="post-popup job_post">
    <div class="post-project">
        <h3>Create New Group</h3>
        <div class="post-project-fields">
            <form action="/bikingroup">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Nama Group">
                    </div>
                    <div class="col-lg-12">
                        <textarea name="description" placeholder="Deskripsi Group"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <ul>
                            <li><button class="active" type="submit" value="post">Create</button></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div><!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div><!--post-project end-->
</div>
<section class="companies-info">
    <div class="container">
        <div class="company-title">
            <h3>All Group</h3>
            <div class="post-st">
                <ul>
                    <li><a class="post-jb active" href="#" title="">Create new Group</a></li>
                </ul>
            </div>
        </div><!--company-title end-->
        <div class="companies-list">
            <div class="row">
                @foreach ($group as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="company_profile_info">
                                <div class="company-up-info">
                                    <img src="images/resources/pf-icon1.png" alt="">
                                    <h3>{{$item->nama}}</h3>
                                    <ul>
                                        <?php $bol = true;?>
                                        @foreach ($relasi as $relate)
                                            @if ($relate->id_group == $item->id_group)
                                                @if ($relate->id_user == session("iduser"))
                                                    <?=$bol=false;?>
                                                @endif
                                                
                                            @endif
                                        @endforeach
                                        @if ($bol)
                                            <form action="/joingroup">
                                                <input type="hidden" value={{$item->id_group}} name="id">
                                                <button type="submit" value="submit" class="col-lg-12 no-pdd follow">Join Group</button>
                                            </form>
                                        @else
                                            <li><a href="#" title="" class="follow">Joined Group</a></li>
                                        @endif
                                    </ul>
                                </div>
                                <form action="/detailgroup">
                                    <input type="hidden" value={{$item->id_group}} name="nama">
                                    <button type="submit" value="submit" class="col-lg-12 no-pdd follow">View Group</button>
                                </form>
                            </div><!--company_profile_info end-->
                        </div>
                @endforeach
            </div>
        </div><!--companies-list end-->
        <div class="process-comm">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div><!--process-comm end-->
    </div>
</section>
@endsection