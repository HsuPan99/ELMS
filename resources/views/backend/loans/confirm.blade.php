@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Loan Confirm (Table)</h2>
	

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Date</th>
				<th>Loantime</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@if($status==1){


			@foreach($loans as $loan)
			<tr>
				<td>{{$i++}}</td>
			
				<td>{{$loan->amount}}</td>
				<td>{{$loan->status}}</td>
				<td>{{$loan->date}}</td>
				<td>{{$loan->loantime}}</td>

				
			</tr>
			@endforeach
			@endif
				</tbody>
			</table>
		</div>
	
@endsection