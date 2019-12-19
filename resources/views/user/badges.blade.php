@extends('template')

@section('isicontent')
<section class="companies-info">
    <div class="container">
        <div class="company-title">
            <h3>Badges</h3>
        </div><!--company-title end-->
        <div class="companies-list">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <?php $bool = false ?>
                            @foreach ($badges as $item)
                                @if ($item->id_badges == 1 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="5achiev.jpg" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Beginner</h3>
                            <h4>Get 5 Achievment</h4>
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
                            @foreach ($badges as $item)
                                @if ($item->id_badges == 2 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="10achiev.jpg" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Trainee</h3>
                            <h4>Get 10 Achievment</h4>
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
                            @foreach ($badges as $item)
                                @if ($item->id_badges == 3 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="15achiev.jpg" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Successful Trainee</h3>
                            <h4>Get 15 Achievment</h4>
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
                            @foreach ($badges as $item)
                                @if ($item->id_badges == 4 && $item->id_user == session('iduser'))
                                    <?php $bool = true ?>
                                @endif
                            @endforeach
                            @if ($bool)
                                <img src="20achiev.jpg" alt="">
                            @else
                                <img src="x.png" alt="">
                            @endif
                            <h3>Master Trainee</h3>
                            <h4>Get 20 Achievment</h4>
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