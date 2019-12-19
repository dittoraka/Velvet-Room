@extends('template')

@section('isicontent')
    <section class="companies-info">
        <div class="col-lg-6">
                <div class="login-sec">			
                    <div class="sign_in_sec current" id="tab-1">
                         <!-- <h3>Isi data Diri anda di bawah ini</h3> -->
						 <h3>Edit Post</h3>
                         <form action="/ngeditpost" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea name="description"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <ul>
                                        <li><input type="file" name="picture"></li>
                                        <li><input type="hidden" name="id" value={{$post[0]->id_post}}></li>
                                    </br>
                                        <li><button class="active" type="submit">Save Edit</button></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <!--login-resources end-->
                    </div><!--sign_in_sec end-->	
                </div>
</section>
@endsection