@extends('template')
@section('isicontent')
		<section class="messages-page">
			<div class="container">
				<div class="messages-sec">
					<div class="row">
						<div class="col-lg-4 col-md-12 no-pdd">
							<div class="msgs-list">
								<div class="msg-title">
									<h3>Messages</h3>
									<ul>
										<li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
									</ul>
								</div><!--msg-title end-->
								<div class="messages-list">
									<ul>
									@foreach ($user as $item)
										@if ($item->username <> session('nama'))
											<?php $bol = true;?>
												<form action="/show-chat">
													<button type="submit"class="btn btn-primary-outline">
														<li>
															<div class="usr-msg-details">
																<div class="usr-ms-img">
																	<img src="profil/{{$item->profil_picture}}" alt="">
																</div>
															<div class="usr-mg-info">
																<h3>{{$item->nickname}}</h3>
																<p></p>
																	<input type="hidden" value={{$item->id_user}} name="id">
																</div><!--usr-mg-info end-->
															</div><!--usr-msg-details end-->
														</li>
													</button>
												</form>
										@endif
									@endforeach									
									</ul>
								</div><!--messages-list end-->
							</div><!--msgs-list end-->
						</div>
						<div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
							<div class="main-conversation-box">
								<div class="message-bar-head">
									<div class="usr-msg-details">
										<div class="usr-ms-img">
											<img src="profil/{{$friend[0]->profil_picture}}" alt="">
										</div>
										<div class="usr-mg-info">
											<h3><?php echo $friend[0]->nickname?></h3>
											<p>Offline</p>
										</div><!--usr-mg-info end-->
									</div>
									<a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
								</div><!--message-bar-head end-->
								<div class="messages-line">
									@foreach ($msg as $items)
										@if ($items->id_user == session('iduser') && $items->id_penerima == session('friend'))
											<div class="main-message-box ta-right">
												<div class="message-dt">
													<div class="message-inner-dt">
														<p><?php echo $items->message?></p>
														<span>...</span>
													</div><!--message-inner-dt end-->
												</div><!--message-dt end-->
												<div class="messg-usr-img">
														<img src="profil/{{$kita[0]->profil_picture}}" alt="">
												</div><!--messg-usr-img end-->
											</div><!--main-message-box end-->
										@endif
										@if ($items->id_user == session('friend') && $items->id_penerima == session('iduser'))								
											<div class="main-message-box st3">
												<div class="message-dt st3">
													<div class="message-inner-dt">
														<p><?php echo $items->message?></p>
													</div><!--message-inner-dt end-->
													<span>...</span>
												</div><!--message-dt end-->
												<div class="messg-usr-img">
													<img src="profil/{{$friend[0]->profil_picture}}" alt="">
												</div><!--messg-usr-img end-->
											</div><!--main-message-box end-->
										@endif
									@endforeach
								</div>
								<div class="message-send-area">
									<form action="/send-chat">
										<div class="mf-field">
											<input type="text" name="message" placeholder="Type a message here">
											<button type="submit">Send</button>
										</div>
										<ul>
											<li><a href="#" title=""><i class="fa fa-smile-o"></i></a></li>
											<li><a href="#" title=""><i class="fa fa-camera"></i></a></li>
											<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
										</ul>
									</form>
								</div><!--message-send-area end-->
							</div><!--main-conversation-box end-->
						</div>
					</div>
				</div><!--messages-sec end-->
			</div>
		</section><!--messages-page end-->



@endsection