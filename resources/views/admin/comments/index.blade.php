@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Comments</h2>
@endsection

@section('content')

<!-- Zero Configuration Table -->
<div class="panel panel-default">
	<div class="panel-heading">Table by DataTables plugin</div>
	<div class="panel-body">
		<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="col-md-1">Id</th>
					<th>Content</th>
					<th>User</th>
					<th>User comment</th>
					<th>Job</th>
					<th class="col-md-1">Action</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th class="col-md-1">Id</th>
					<th>Content</th>
					<th>User</th>
					<th>User comment</th>
					<th>Job</th>
					<th class="col-md-1">Action</th>
				</tr>
			</tfoot>
			<tbody>
				@foreach ($comments as $comment)
				<tr>
					<td class="col-md-1">{{ $comment->id }}</td>
					<td>{{ $comment->content }}</td>
					<td>{{ $comment->user->name }}</td>
					<td>{{ $comment->user_comment->name }}</td>
					<td>{{ $comment->job->name }}</td>
					<td class="col-md-1">
						<a href="#" class="btn btn-danger btn-circle" onclick="deleteFunc(event, {{$comment->id}})"><i class="fa fa-trash"></i></a>
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
				url: domainapi+'/api/comments/'+id,
				headers: {"Authorization": "Bearer {{Session::get('token')}}"},
				success: function (data) {
					window.location.href = "/admin/comments";
				},
				error: function (data) {
					window.location.href = "/admin/logout";
				}
			});
	    }
	};
</script>
@endsection
