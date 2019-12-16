@extends('templateadmin')<!--header end-->	

@section('isicontent')
		<section class="companies-info">
			<div class="container">
				<div class="company-title">
                    <h3>Banned/Warned Users</h3>
                    <div class="search-sec">
                            <div class="container">
                                <div class="search-box">
                                    <form action="/admincarimangsa">
                                        <input type="text" name="search" placeholder="Search keywords">
                                        <button type="submit">Search</button>
                                    </form>
                                </div><!--search-box end-->
                            </div>
                        </div>
                </div><!--company-title end-->
                
				<div class="companies-list"></div>
					<table>
                        <tr>
                            <td>No</td>
                            <td>Username</td>
                            <td>Password</td>
                            <td>Nickname</td>
                            <td>Email</td>
							<td>Delete</td>
							<td>Update</td>
                        </tr>
                        @foreach ($user as $isi)
                            <tr>
                                <td>{{ $isi->id_user }}</td>
                                <td>{{ $isi->username }}</td>
                                <td>{{ $isi->password }}</td>
                                <td>{{ $isi->nickname }}</td>
                                <td>{{ $isi->email }}</td>
                                <td><form action="/deleteuser" method="post"><input type="hidden" value={{$isi->username}} name="username"><input type="submit" name="btndelete" value="Delete">@csrf</form></td>
								<td><form action="/loaddelete" method="post"><input type="hidden" value={{$isi->username}} name="username"><input type="submit" name="btndelete" value="Update">@csrf</form></td>
							</tr>
                        @endforeach
                    </table>
				</div><!--companies-list end-->
			</div>
		</section><!--companies-info end-->

@endsection