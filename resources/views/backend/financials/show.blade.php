@extends('backendtemplate')
@section('content')

<form id="loan">
	<div class="container-fluid">
	<h2 class="d-inline-block py-3">Loan Detail (Table)</h2>
	
	<table class="table">
		<thead>
			<tr>
				<th>Amount</th>
				<th>Date</th>
				<th>Loan Time</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
			
			<tr>

				{{-- <p>{{$loan}}</p> --}}


				{{-- ($student->educationdetails); --}}
				{{-- @foreach($financial->loans as $loan) --}}
				<td>{{$loan->amount}}</td>
				<td>{{$loan->date}}</td>
				<td>{{$loan->loantime}}</td>
				{{-- <td>{{$financial->date}}</td>
				<td>{{$financial->loantime}}</td> --}}
				{{-- @endforeach --}}
				
				<td>
					<a href="{{route('loan.confirm',$loan->id)}}" class="btn btn-warning btn-sm">Confrim</a>
				</td>
			</tr>
			
		</tbody>
	</table>

</div>
</form>
@endsection