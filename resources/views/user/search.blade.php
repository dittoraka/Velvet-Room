@extends('template')

@section('isicontent')
<section class="companies-info">
    <div class="container">
        <div class="company-title">
            <h3>All Search</h3>
        </div><!--company-title end-->
        <div class="companies-list">
            <div class="row">
                @foreach ($user as $item)
                    @if ($item->nickname <> session('nickname'))
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="company_profile_info">
                                <div class="company-up-info">
                                    <img src="profil/{{$item->profil_picture}}" alt="">
                                    <h3>{{$item->nickname}}</h3>
                                    <ul>
                                        <?php $bol = true;?>
                                        @foreach ($friend as $items)
                                            @if ($items->id_friend == $item->id_user)
                                                <?=$bol=false;?>
                                            @endif
                                        @endforeach
                                        @if ($bol)
                                            <li><a href="#" title="" class="follow">Add Friend</a></li>
                                        @endif
                                        <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <form action="/user-profile">
                                    <input type="hidden" value={{$item->username}} name="username">
                                    <button type="submit" value="submit" class="col-lg-12 no-pdd follow">View Profile</button>
                                </form>
                            </div><!--company_profile_info end-->
                        </div>
                    @endif
                @endforeach
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