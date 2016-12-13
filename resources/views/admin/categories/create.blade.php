@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Add category</h2>
@endsection

@section('content')

<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">Form fields</div>
		<div class="panel-body">
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" name="name" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Image</label>
					<div class="col-sm-10">
						<input type="file" name="image" class="form-control">
					</div>
				</div>
				
				<div class="hr-dashed"></div>
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<button class="btn btn-primary" type="submit">Add</button>
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
	            url: domainapi+'/api/categories',
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
