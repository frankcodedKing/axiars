@extends('dashblayout.dashlayout')
<style>

    /* Import Google Font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
} */
/* body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #e3f2fd;
} */


@import url('https://fonts.googleapis.com/css2?family=josefin+Sans:wght@400;500;600;700&display=swap');
/* 
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;
} */

.atmcontainer {
    /* min-height: 100vh;
    width: 100%;
    background: #000;
    display: flex;
    align-items: center;
    justify-content: center; */
}

.atmcard {
    width: 390px;
    height: 290px;
    color: #fff;
    cursor: pointer;
    perspective: 1000px;
}

.atmcard-inner {
    width: 95%;
    height: 90%;
    position: relative;
    transition: transform 1s;
    transform-style: preserve-3d;
}

.fronto, .backo {
    width: 100%;
    height: 100%;
    background-image: linear-gradient(45deg, #0045c7, #ff2c7d);
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px 30px;
    border-radius: 15px;
    overflow: hidden;
    z-index: 1;
    backface-visibility: hidden;
}

.atmrow {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.map-img {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0.3;
    z-index: -1;
}

.card-no {
    font-size: 30px;
    margin-top: 60px;
}

.card-holder {
    font-size: 10px;
    margin-top: 5px;
}

.name {
    font-size: 18px;
    margin-top: -10px;
}

.bar {
    background: #222;
    margin-left: -30px;
    margin-right: -30px;
    height: 60px;
    margin-top: 10px;
}

.card-cvv {
    margin-top: 20px;
}

.card-cvv div {
    flex: 1;
}

.card-cvv img {
    width: 100%;
    display: block;
    line-height: 0;
}

.card-cvv p {
    background: #fff;
    color: #000;
    font-size: 22px;
    padding: 10px 20px;
}

.card-text {
    margin-top: 30px;
    font-size: 14px;
}


.signature {
    margin-top: 30px;
}


.backo {
    transform: rotateY(180deg);
}

.atmcard:hover .atmcard-inner {
    transform: rotateY(-180deg);
}





    </style>
@section('body')


        
<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
	<div>
    </div>    	<div class="card-body text-wrap">
	
		
<div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">


  <div class="container col-lg-8">
  <div>
    <h1> Deposit</h1>
  </div>





  <!-- ATM CARD -->

  <!-- ATM CARD -->


  <!-- <div class="atmcontainer"> -->
        <div class="atmcard">
            <div class="atmcard-inner">
                <div class="fronto">
                    <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img">
                    <div class="atmrow">
                        <img src="https://i.ibb.co/G9pDnYJ/chip.png" width="60px">
                        <img src="https://i.ibb.co/WHZ3nRJ/visa.png" width="60px">
                    </div>
                    <div class="atmrow card-no">
                        <p>5244</p>
                        <p>2150</p>
                        <p>8252</p>
                        <p>6420</p>
                    </div>
                    <div class="atmrow card-holder">
                        <p>CARD HOLDER</p>
                        <p>VALID TILL</p>
                    </div>
                    <div class="atmrow name">
                        <p>{{ Auth::user()->name }}</p>
                        <p>10 / 26</p>
                    </div>
                </div>
                <div class="backo">
                    <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img">
                    <div class="bar"></div>
                    <div class="atmrow card-cvv">
                        <div>
                            <img src="https://i.ibb.co/S6JG8px/pattern.png">
                        </div>
                        <p>824</p>
                    </div>
                    <div class="atmrow card-text">
                        <p>this is a virtual card from Havex Credit Union. Please return to nearest Bank to report if found.</p>
                    </div>
                    <div class="atmrow signature">
                        <p>CUSTOMER SIGNATURE</p>
                        <img src="https://i.ibb.co/WHZ3nRJ/visa.png" width="80px">
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->


  <!-- ATM CARD -->

  <!-- ATM CARD -->







		<div class="card mb-10">
		  <div class="card-body">
      <form action="{{route('dashb_debit_apply_post')}}" method="post">
        @csrf
			  <div class="fv-row mb-6">
				<label class="form-label fs-6 fw-bolder text-dark"> Enter Email </label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="email" required="" placeholder="Enter amount €">
      </div>
								<div class="fv-row mb-6">
									<label class="form-label fs-6 fw-bolder text-dark"> Enter Name </label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="name" required="" placeholder="Enter amount €">
								</div>

                <div class="fv-row mb-6">
									<label class="form-label fs-6 fw-bolder text-dark"> Shipping Address </label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="address" required="" placeholder="Enter amount €">
								</div>

							
								<div class="text-center mt-10">
									<button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2">
										<span>Continue</span>
										<!-- <span wire:loading wire:target="addTicket">Processing Request...</span> -->
									</button>
								</div>
			</form>
		  </div>
	  
	 
	  </div>
	</div>
  </div>
</div>
</div>
  </div>

@endsection
