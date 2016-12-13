@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Edit category</h2>
@endsection

@section('content')

<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">ID: {{$category->id}}</div>
		<div class="panel-body">
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				<div class="form-group">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" name="name" value="{{ $category->name }}" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">File</label>
					<img style="width: 200px;" src="{{ asset('public/images/categories/'.$category->image) }}">
					<div class="col-sm-10">
						<input type="file" name="image" class="form-control">
					</div>
				</div>

				<div class="hr-dashed"></div>
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<button class="btn btn-primary" type="submit">Edit</button>
						<button class="btn btn-default" type="button" onclick="window.history.back()">Cancel</button>
					</div>
				</div>

			</form>

		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(function () {
        $('form').on('submit', function (e) {
             e.preventDefault();
	        var formData = new FormData(this);

	        $.ajax({
	            type:'POST',
	            url: domainapi+'/api/categories/{{$category->id}}',
	            headers: {"Authorization": "Bearer {{Session::get('token')}}"},
	            data:formData,
	            cache:false,
	            contentType: false,
	            processData: false,
	            success:function(data){
	                window.location.href = "/admin/categories";
	            },
	            error: function(data){
	                console.log("error");
	                console.log(data);
	            }
	        });
        });
    });
</script>
@endsection
