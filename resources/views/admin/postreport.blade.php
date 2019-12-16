@extends('templateadmin')<!--header end-->	

@section('isicontent')
		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>Banned/Warned Users</h3>
				</div><!--company-title end-->
				<div class="companies-list"></div>
					<table>
                        <tr>
                            <td>ID Post</td>
                            <td>Post</td>
                            <td>Path Gambar</td>
                            <td>ID User</td>
                            <td>Lihat Post</td>
                            <td>Delete Post</td>
                        </tr>
                        @foreach ($post as $isi)
                            @foreach ($report as $key)
                                @if ($isi->id_post == $key->id_post)
                                    <tr>
                                        <td>{{ $isi->id_post }}</td>
                                        <td>{{ $isi->post }}</td>
                                        <td>{{ $isi->gambar }}</td>
                                        <td>{{ $isi->id_user }}</td>
                                        <td><form action="/detailpost" method="post"><input type="hidden" value={{$isi->id_post}} name="id"><input type="submit" name="btndelete" value="Lihat Post">@csrf</form></td>
                                        <td><form action="/admindeletepost" method="post"><input type="hidden" value={{$isi->id_post}} name="id"><input type="submit" name="btndelete" value="Delete Post">@csrf</form></td>
                                    </tr> 
                                @endif
                            @endforeach
                        @endforeach
                    </table>
				</div><!--companies-list end-->
			</div>
		</section><!--companies-info end-->

@endsection