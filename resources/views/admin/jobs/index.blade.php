@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Jobs</h2>
@endsection

@section('content')

<!-- Zero Configuration Table -->
<a href="/admin/jobs/create" class="btn btn-info"><i class="fa fa-plus-square"> Add</i></a>
<div class="panel panel-default">
	<div class="panel-heading">Table by DataTables plugin</div>
	<div class="panel-body">
		<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="col-md-1">Id</th>
					<th>Name</th>
					<th>Description</th>
					<th>Image</th>
					<th>Salary</th>
					<th>Position</th>
					<th>Status</th>
					<th>User</th>
					<th>Category</th>
					<th>Latitude</th>
					<th>Longitude</th>
					<th class="col-md-1">Action</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th class="col-md-1">Id</th>
					<th>Name</th>
					<th>Description</th>
					<th>Image</th>
					<th>Salary</th>
					<th>Position</th>
					<th>Status</th>
					<th>User</th>
					<th>Category</th>
					<th>Latitude</th>
					<th>Longitude</th>
					<th class="col-md-1">Action</th>
				</tr>
			</tfoot>
			<tbody>
				@foreach ($jobs as $job)
				<tr>
					<td class="col-md-1">{{ $job->id }}</td>
					<td>{{ $job->name }}</td>
					<td>{!! nl2br($job->description) !!}</td>
					<td><img style="width: 100px; height: 100px" src="{{ asset('public/images/jobs/'.$job->image) }}"></td>
					<td>{{ number_format($job->salary , 0, ',', '.') }}</td>
					<td>{{ $job->position }}</td>
					<td>{{ $job->status }}</td>
					<td>{{ $job->user->name }}</td>
					<td>{{ $job->category->name }}</td>
					<td>{{ $job->latitude }}</td>
					<td>{{ $job->longitude }}</td>
					<td class="col-md-1">
						<a href="/admin/jobs/{{ $job->id }}/edit" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
						<a href="#" class="btn btn-danger btn-circle" onclick="deleteFunc(event, {{$job->id}})"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$("#zctb").dataTable({
        aaSorting : [[0, 'desc']],
    });

    function deleteFunc(e, id) {
		e.preventDefault();
		var result = confirm("Want to delete?");
	    if (result) {
	        $.ajax({
				type: 'delete',
				url: domainapi+'/api/jobs/'+id,
				headers: {"Authorization": "Bearer {{Session::get('token')}}"},
				success: function (data) {
					window.location.href = "/admin/jobs";
				},
				error: function (data) {
					window.location.href = "/admin/logout";
				}
			});
	    }
	};
</script>
@endsection
