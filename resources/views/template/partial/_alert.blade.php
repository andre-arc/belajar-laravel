@if (session('success'))
	<div class="alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		<strong>Success!</strong> {{ session('success') }}
	</div>
@endif

@if (session('info'))
	<div class="alert alert-info alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		<strong>Info: </strong> {{ session('info') }}
	</div>
@endif

@if (session('warning'))
	<div class="alert alert-warning alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		{{ session('warning') }}
	</div>
@endif