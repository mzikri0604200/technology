@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="col-lg-12 text-right mb-4">
				<a href="{{ route('create.category') }}" class="btn btn-primary">Create Category</a>
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

					@foreach ($categories as $number => $category)
					<tbody>
						<tr>
							<th scope="row">{{$number + $categories->firstItem()}}</th>
							<td>{{$category->name}}</td>
							<td>{{$category->slug}}</td>
							<td>
								<div class="d-flex flex-row">
									<a href="{{ route('category.edit', $category->slug)}}" class="btn btn-sm btn-info mr-1">Edit</a>
									<form action="/category/{{ $category->slug }}/delete" method="POST">
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
				{{$categories->links()}}
			</div>
		</div>
@endsection