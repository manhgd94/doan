@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Orders</h2>
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
					<th>User</th>
					<th>Job</th>
					<th>Status</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th class="col-md-1">Id</th>
					<th>User</th>
					<th>Job</th>
					<th>Status</th>
				</tr>
			</tfoot>
			<tbody>
				@foreach ($orders as $order)
				<tr>
					<td class="col-md-1">{{ $order->id }}</td>
					<td>{{ $order->user->name }}</td>
					<td>{{ $order->job->name }}</td>
					<td>{{ $order->status }}</td>
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
