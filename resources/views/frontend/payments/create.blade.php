@extends('frontendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="text-center py-3">Payment</h2>


	<div class="row">
		<div class="offset-md-2 col-md-8">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif


			<form method="POST" action="{{route('payment.store')}}" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group">
					<label>Installment</label>
					<input type="text" name="installment" class="form-control">
				</div>

				<div class="form-group">
					<label>Balance</label>
					<input type="text" name="balance" class="form-control">
				</div>

				<div class="form-group">
					<label>Payment Date</label>
					<input type="text" name="paymentdate" class="form-control">
				</div>

				{{-- <div class="form-group">
					<label>Financial</label>
					<input type="text" name="financial" class="form-control">
				</div> --}}


				<div class="form-group">
						<label> Loan</label>
						<select name="loan" class="form-control">
							<option>Choose....
								@foreach($loans as $loan)
									<option value="{{$loan->id}}" selected="selected">{{$loan->amount}}</option>
								@endforeach
							</option>	

						</select>
					</div>

				
					
				
				<input type="submit" name="" value="Done" class="btn btn-outline-primary mb-3">
			</form>
		</div>
	</div>
</div>
@endsection