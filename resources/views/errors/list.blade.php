@if($errors->any())
<div role="alert" class="alert alert-warning alert-dismissible fade in">
    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
    <strong>Error!</strong><br>
    @foreach($errors->all() as $error)
     {{ $error }}</br>
    @endforeach
</div>
@endif



