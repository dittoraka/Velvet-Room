@extends('template')

@section('isicontent')
<section class="companies-info">
    <div class="container">
        <div class="company-title">
            <h3>Achievement</h3>
        </div><!--company-title end-->
        <div class="companies-list">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 1 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Hello World</h3>
                            <h4>Post your first feed</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 2 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>New Ally</h3>
                            <h4>Make a Friend</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 3 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Thread Maker</h3>
                            <h4>Post a thread discussion</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 4 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Stylist</h3>
                            <h4>Customize your avatar</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 5 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Shopping Spree</h3>
                            <h4>Buy some clothing or accessories</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 6 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Say Hi!</h3>
                            <h4>Chat with friend</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 7 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Thumbs Up</h3>
                            <h4>Give someone's post a like</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($achiev as $item)
                                @if ($item->id_achievment == 8 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="v.png" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Artist</h3>
                            <h4>Own 3 clothing or accessories</h4>
                            @if ($bool)
                                <h2>Complete</h2> 
                            @else
                                <h2>Incomplete</h2>
                            @endif
                        </div>
                    </div><!--company_profile_info end-->
                </div>
            </div>
        </div><!--companies-list end-->
    </div>
</section>
@endsection