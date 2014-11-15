@if(Session::has('message'))
<div class="alert alert-dismissable alert-info">
<button type="button" class="close" data-dismiss="alert">x</button>
{{{ Session::get('message') }}}
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{{ Session::get('success') }}}
</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-dismissable alert-warning">
<button type="button" class="close" data-dismiss="alert">x</button>
{{{ Session::get('warning') }}}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert">x</button>
{{{ Session::get('error') }}}
</div>
@endif