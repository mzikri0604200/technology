@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">New Category</div>
					<div class="card-body">
						<form action="/category/store" method="POST" autocomplete="off" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="name">Nama</label>
								<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
								@error('name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{ route('home') }}" type="submit" class="btn btn-danger">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection