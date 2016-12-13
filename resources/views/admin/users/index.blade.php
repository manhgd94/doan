@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Users</h2>
@endsection

@section('content')

<!-- Zero Configuration Table -->
<a href="/admin/users/create" class="btn btn-info"><i class="fa fa-plus-square"> Add</i></a>
<div class="panel panel-default">
	<div class="panel-heading">Table by DataTables plugin</div>
	<div class="panel-body">
		<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="col-md-1">Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th class="col-md-1">Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
				</tr>
			</tfoot>
			<tbody>
				@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->role }}</td>
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
</script>
@endsection
