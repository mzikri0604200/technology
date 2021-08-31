@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">New Post</div>
					<div class="card-body">
						<form action="/posts/store" method="POST" autocomplete="off" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="thumbnail">Thumbnail</label>
								<input type="file" name="thumbnail" id="thumbnail" class="form-control-file @error('thumbnail') is-invalid @enderror">
								@error('thumbnail')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $post->title }}">
								@error('title')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group">
								<label for="category">Category</label>
								<select class="form-control @error('body') is-invalid @enderror" id="category" name="category">
									<option disabled selected>Choose one!</option>
									@foreach ($categories as $category)
										<option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{$category->name}}</option>
									@endforeach
								</select>
								@error('category')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group">
								<label for="tags">Tag</label>
								<select class="form-control select2 @error('body') is-invalid @enderror" id="tags" name="tags[]" multiple>
									@foreach ($post->tags as $tag)
										<option selected value="{{ $tag->id }}">{{$tag->name}}</option>
									@endforeach
									@foreach ($tags as $tag)
										<option value="{{ $tag->id }}">{{$tag->name}}</option>
									@endforeach
								</select>
								@error('tags')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group">
								<label for="body">Body</label>
								<textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" rows="3">{{ old('body') ?? $post->body }}</textarea>
								@error('body')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>

							<button type="submit" class="btn btn-primary">{{$submit ?? "Update"}}</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection