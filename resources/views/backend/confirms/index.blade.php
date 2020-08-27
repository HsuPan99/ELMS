@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Loan Confirm (Table)</h2>
	

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Date</th>
				<th>Loantime</th>
				
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			


			@foreach($loans as $loan)
			<tr>
				<td>{{$i++}}</td>
			    <td>{{$loan->amount}}</td>
				<td>{{$loan->status}}</td>
				<td>{{$loan->date}}</td>
				<td>{{$loan->loantime}}</td>

				
			</tr>
			@endforeach
			{{-- @foreach($students as $student)
				<tr>
					<td>{{$student->name}}</td>
					<td>{{$student->financial->loan->amount}}</td>
					<td>{{$student->financial->monthly_income}}</td>
					<td>{{$student->financial->loan->date}}</td>
					<td>{{$student->financial->loan->loantime}}</td>
					
					
				</tr>
			@endforeach --}}
			
				</tbody>
			</table>
		</div>
	
@endsection