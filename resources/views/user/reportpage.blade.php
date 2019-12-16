@extends('template')

@section('isicontent')
    <section class="companies-info">
        <div class="col-lg-6">
                <div class="login-sec">			
                    <div class="sign_in_sec current" id="tab-1">
                         <!-- <h3>Isi data Diri anda di bawah ini</h3> -->
						 <h3>Report</h3>
                        <form action="/reportposting" method="POST">
                            @csrf
                                <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="posting" value={{$post[0]->post}} readonly>
                                                    
                                                </div>
                                                <input type="hidden" name="id" value={{$post[0]->id_post}}>
                                        </div>
                                    <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="text" name="alasan" placeholder="Alasan Report">
                                            </div>
                                    </div>
                                </div>
                                <button type="submit">Submit</button>
                        </form>
                        <!--login-resources end-->
                    </div><!--sign_in_sec end-->	
                </div>
</section>
@endsection