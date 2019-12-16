@extends('template')

@section('isicontent')
<section class="companies-info">
    <div class="container">
        <div class="company-title">
            <h3>All Users</h3>
        </div><!--company-title end-->
        <div class="companies-list">
            <div class="row">
                @foreach ($user as $item)
                    @if ($item->username <> session('nama'))
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
                {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon1.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon2.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon3.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon4.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon5.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon6.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon7.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon8.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon9.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon10.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon11.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="users/user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="images/resources/pf-icon12.png" alt="">
                            <h3>John Doe</h3>
                            <h4>Graphic Designer</h4>
                            <ul>
                                <li><a href="#" title="" class="follow">Follow</a></li>
                                <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" title="" class="hire-us">Hire</a></li>
                            </ul>
                        </div>
                        <a href="user-profile" title="" class="view-more-pro">View Profile</a>
                    </div><!--company_profile_info end-->
                </div> --}}
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