@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading">Create Post</div>

	                <div class="panel-body">
	                	<form action="{{ route('post.update', $post) }}" method="POST">
	                		{{ csrf_field() }}
	                		{{ method_field('PATCH') }}
	                		<div class="form-group">
	                			<label for="">Title</label>
	                			<input type="text" class="form-control" name="title" placeholder="Post Title" value="{{ $post->title }} ">
	                		</div>

	                		<div class="form-group">
	                			<label for="">Category</label>
	                			<select name="category_id" id="" class="form-control">
	                				@foreach ($categories as $category)
	                					<option
	                						value="{{ $category->id }} "
	                						@if ($category->id === $post->category_id)
	                							selected
	                						@endif
	                					>
	                						{{ $category->name }}
	                					</option>
	                				@endforeach
	                			</select>
	                		</div>

	                		<div class="form-group">
	                			<label for="">Content</label>
	                			<textarea name="content" id="text-content">
	                				{{ $post->content }}
	                			</textarea>
	                		</div>

	                		<div class="form-group">
	                			<input type="submit" name="submit" value="Create Post" class="btn btn-primary btn-lg pull-right">
	                		</div>
	                	</form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection