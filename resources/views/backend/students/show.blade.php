@extends('backendtemplate')
@section('content')

<form id="education">
	<div class="container-fluid">
	<h2 class="d-inline-block py-3">Education Detail (Table)</h2>
	
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>RollNo:</th>
				<th>University:</th>
				<th>Year</th>
				<th>Semester:</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			
			<tr>

				{{-- ($student->educationdetails); --}}
				<td>{{$i++}}</td>
				<td>{{$student->educationdetails->rollno}}</td>
				<td>{{$student->educationdetails->university}}</td>
				<td>{{$student->educationdetails->year}}</td>
				<td>{{$student->educationdetails->semester}}</td>
				<td>
					<a href="{{route('educationdetails.edit',$student->educationdetails->id)}}" class="btn btn-warning btn-sm">Edit</a>
				</td>
			</tr>
			
		</tbody>
	</table>

</div>
</form>


<form id="financial">
	<div class="container-fluid">
	<h2 class="d-inline-block py-3">Financial Info (Table)</h2>
	

	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Education Exp</th>
				<th>Accomodation Exp</th>
				<th>Utility Exp</th>
				<th>Monthly Income</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			
			<tr>

				{{-- ($student->educationdetails); --}}
				<td>{{$i++}}</td>
				<td>{{$student->financial->education_exp}}</td>
				<td>{{$student->financial->accomodation_exp}}</td>
				<td>{{$student->financial->utility_exp}}</td>
				<td>{{$student->financial->monthly_income}}</td>
				<td>
					<a href="{{route('financials.edit',$student->financial->id)}}" class="btn btn-warning btn-sm">Edit</a>
					<a href="{{route('financials.show',$student->financial->id)}}" class="btn btn-info d-inline-block btn-sm">Detail</a>
				</td>

			</tr>
			
		</tbody>
	</table>
	
{{-- <a href="{{route('financials.edit',$student->financial->id)}}" class="btn btn-warning btn-sm confirm" >Confrim</a>
 --}}</div>
</form>


@endsection