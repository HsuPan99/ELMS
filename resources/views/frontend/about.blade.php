@extends('frontendtemplate')
@section('content')


	<section>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-2">
					<div class="p-5">
						<img class="rounded-circle mt-5" src="{{asset('frontend/frontendimg/img2.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="p-5">
						<h2 class="display-4">OUR MISSION</h2>
						<p>Education loan management system which
							offers education loans to the students who find
							it difficult to educate themselves because of the
						expense.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-1">
					<div class="p-5">
						<img class="rounded-circle" src="{{asset('frontend/frontendimg/img4.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-lg-6 order-lg-2">
					<div class="p-5">
						<h2 class="display-4">ABOUT FOR LOAN</h2>
						<p>The loan amount offered to a student is from
							Ks.500,000 to Ks.1,500,000.
							Repayment terms of Up to 60 months available
						until program completion.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row align-items-center mb-5">
				<div class="col-lg-6 order-lg-2">
					<div class="p-5">
						<img class="rounded-circle" src="{{asset('frontend/frontendimg/img5.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="p-5">
						<h2 class="display-4">OUR GOAL</h2>
						<p>For economic development and
							prosperity loan for education should be
							seen as an investment.It also supports
							students’ education by providing loans to
							students in need.We can continue to
							support other needy students with the
						monthly interest rates paid by students.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection