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
                                    <td>ID Discussion</td>
                                    <td>Discussion name</td>
                                    <td>Discussion thread</td>
                                    <td>ID User</td>
                                    <td>Lihat Discussion</td>
                                    <td>Delete Discussion</td>
                                </tr>
                                @foreach ($diss as $isi)
                                    @foreach ($report as $key)
                                        @if ($isi->id_discussion == $key->id_discussion)
                                            <tr>
                                                <td>{{ $isi->id_discussion }}</td>
                                                <td>{{ $isi->discuss_name }}</td>
                                                <td>{{ $isi->discuss_thread }}</td>
                                                <td>{{ $isi->id_user }}</td>
                                                <td><form action="/getdiscussion" method="get"><input type="hidden" value={{$isi->id_discussion}} name="iddis"><input type="submit" name="btndelete" value="Lihat Discussion">@csrf</form></td>
                                                <td><form action="/admindeletediss" method="get"><input type="hidden" value={{$isi->id_discussion}} name="id"><input type="submit" name="btndelete" value="Delete Discussion">@csrf</form></td>
                                            </tr> 
                                        @endif
                                    @endforeach
                                @endforeach
                    </table>
				</div><!--companies-list end-->
			</div>
		</section><!--companies-info end-->

@endsection