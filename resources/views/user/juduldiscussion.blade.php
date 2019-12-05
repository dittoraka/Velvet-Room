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

<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="filter-secs">
                            <div class="filter-heading">
                                <h3>Filters</h3>
                                <a href="#" title="">Clear all filters</a>
                            </div><!--filter-heading end-->
                            <div class="paddy">
                                
                            </div>
                        </div><!--filter-secs end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="main-ws-sec">
                            <div class="posts-section">
                                <div class="post-bar">
                                    <div class="post_topbar">
                                        <div class="usy-dt">
                                            <div class="usy-name">
                                                <h3>John Doe</h3>
                                            </div>
                                        </div>
                                        <div class="ed-opts">
                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                            <ul class="ed-options">
                                                <li><a href="#" title="">Edit Post</a></li>
                                                <li><a href="#" title="">Unsaved</a></li>
                                                <li><a href="#" title="">Unbid</a></li>
                                                <li><a href="#" title="">Close</a></li>
                                                <li><a href="#" title="">Hide</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job_descp">
                                        <h3>Simple Classified Site</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... </p>
                                    </div>
                                    <form action="/getdiscussion" method="get">
                                        <button type="submit">Detail</button>
                                    </form>
                                </div>
                            </div><!--posts-section end-->
                        </div><!--main-ws-sec end-->
                    </div><!--right-sidebar end-->
                </div>
            </div><!-- main-section-data end-->
        </div> 
    </div>
</main>
	
@endsection