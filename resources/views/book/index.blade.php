@extends("layouts.app")
@section("content")
	<table class="table table-hover table-striped">
		<thead>
			<th>Tên sách</th>
			<th>Giá</th>
		</thead>
		@foreach($books as $book)
		<tr>
			<td>{{$book->TenSach}}</td>
			<td>{{$book->GiaCu}}</td>
		</tr>
		@endforeach
	</table>
@endsection