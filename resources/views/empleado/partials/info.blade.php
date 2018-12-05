@if(Session::has('info'))
	<div class="alert alert-success alert-dismissable">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		 <a class="alert-link" href="#"></a>.
		{{ Session::get('info') }}
	</div>
@endif