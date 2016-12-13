@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Rates</h2>
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
					<th>Rate</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th class="col-md-1">Id</th>
					<th>User</th>
					<th>Rate</th>
				</tr>
			</tfoot>
			<tbody>
				@foreach ($rates as $rate)
				<tr>
					<td class="col-md-1">{{ $rate->id }}</td>
					<td>{{ $rate->user->name }}</td>
					<td>{{ $rate->rate }}</td>
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
