<div class="col-lg-12">
    @if (Session::has('flash_message'))
        <div class="alert alert-{{ Session::get('flash_level') }} alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<strong>{{ Session::get('flash_message') }}</strong>
        </div>
    @endif
</div>
