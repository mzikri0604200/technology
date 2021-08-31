@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-lg-12 text-right mb-4">
			<a href="{{ route('create.tags') }}" class="btn btn-primary">Post Tag</a>
		</div>
		<div class="col-lg-12">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Slug</th>
						<th scope="col">Action</th>
					</tr>
				</thead>

				@foreach ($tags as $number => $tag)
					<tbody>
						<tr>
							<th scope="row">{{$number + $tags->firstItem()}}</th>
							<td>{{$tag->name}}</td>
							<td>{{$tag->slug}}</td>
							<td>
								<div class="d-flex flex-row">
									<a href="{{ route('edit.tags', $tag->slug)}}" class="btn btn-sm btn-info mr-1">Edit</a>
									<form action="/tags/{{ $tag->slug }}/delete" method="POST">
										@csrf
										@method('delete')
										<button class="btn btn-sm btn-danger" type="submit">Hapus</button>
									</form>
								</div>
							</td>
						</tr>
					</tbody>
				@endforeach
					
			</table>
			{{$tags->links()}}
		</div>
	</div>
@endsection