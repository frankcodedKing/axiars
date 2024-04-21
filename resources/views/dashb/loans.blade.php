@extends('dashblayout.dashlayout')

@section('body')

        
<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
	
	 <div>
    </div>                        <div>
    </div>		
<div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">
  <div class="container col-lg-8 col-md-8">
    <h2 class="form-header">
        Loan Request Application
    </h2>
		<div class="card mb-10">
		  <div class="card-body">
		  <form action="{{ route('loansubmit') }}" method="POST" class="form-validate" name="loanForm" id="loanForm" data-select2-id="loanForm">
                @csrf
				<div class="fv-row mb-6">
					<label class="form-label fs-6 fw-bolder text-dark">Loan Amount (EUR)</label>
					<input class="form-control form-control-lg form-control-solid" type="text" name="amount" required="" placeholder="Amount (€)">
														</div>
			  <div class="fv-row mb-6">
				<label class="form-label fs-6 fw-bolder text-dark">Credity Facility</label>
				<select class="form-select form-select-solid" name="" required="">
					<option selected="" value="">Select Loan/Credit Facility</option>
                                            <option value="Personal Home Loans">Personal Home Loans</option>
                                            <option value="Joint Mortgage ">Joint Mortgage </option>
                                            <option value="Automobile Loans ">Automobile Loans </option>
                                            <option value="Salary loans">Salary loans</option>
                                            <option value="Secured Overdraft">Secured Overdraft</option>
                                            <option value="Contract Finance">Contract Finance</option>
                                            <option value="Secured Term Loans">Secured Term Loans</option>
                                            <option value="StartUp/Products Financing">StartUp/Products Financing</option>
                                            <option value="Local Purchase Orders Finance">Local Purchase Orders Finance</option>
                                            <option value="Operational Vehicles">Operational Vehicles</option>
                                            <option value="Revenue Loans and Overdraft">Revenue Loans and Overdraft</option>
                                            <option value="Retail TOD">Retail TOD</option>
                                            <option value="Commercial Mortgage">Commercial Mortgage</option>
                                            <option value="Office Equipment">Office Equipment</option>
                                            <option value="Health Finance Product Guideline">Health Finance Product Guideline</option><option value="Health Finance">Health Finance</option>
				</select>
													</div>



                                                    <div class="fv-row mb-6">
                                                        <label class="form-label fs-6 fw-bolder text-dark">Duration (Months)</label>
                                                        <select class="form-select form-select-solid" name="duration" required="">
                                                            <option value="6">6 Months</option>
                                                            <option value="12">12 Months</option>
                                                            <option value="24">2 Years</option>
                                                            <option value="36">3 Years</option>
                                                            <option value="48">4 Years</option>
                                                            <option value="60">5 Years</option>
                                                        </select>
                                                                                            </div>


								<div class="fv-row mb-6">
									<label class="form-label fs-6 fw-bolder text-dark">Purpose of Loan</label>
									<textarea class="form-control form-control-lg form-control-solid preserveLines" rows="5" type="text" name="purpose" required="" placeholder="Purpose for loan"></textarea>
								</div>



                                <div class="fv-row mb-6">
                                    <label class="form-label fs-6 fw-bolder text-dark">Monthly Net Income</label>
                                    <select class="form-select form-select-solid" name="" required="">
                                        <option value="2,000-5,000">€2,000- €5,000</option>
                                        <option value="6,000-10,000">€6,000-€10,000</option>
                                        <option value="11,000-20,000">€11,000-€20,000</option>
                                        <option value="21,000-50,000">€21,000-€50,000</option>
                                        <option value="100,000 and above">€100,000 and above</option>
                                    </select>
                                                                        </div>
								
								<div class="text-center mt-10">
									<button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2">
										<span>Send Request </span>
										<!-- <span wire:loading wire:target="addTicket">Processing Request...</span> -->
									</button>
								</div>
			</form>
		  </div>

	 
	  </div>
	</div>



	
  </div>


  <div class="container">
                  <div class="row g-xl-8">
                   <strong>
					<h3>Loan History  </h3>
</strong>
                      <div class="col-lg-12 col-md-12">
                          <div class="d-flex justify-content-center flex-column me-3">
                              <div class="col-md-12">
                                  <div class="input-group input-group-solid mb-5 rounded-4">
                                      <span class="input-group-text" id="basic-addon1"><svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M507.3 484.7l-141.5-141.5C397 306.8 415.1 259.7 415.1 208c0-114.9-93.13-208-208-208S-.0002 93.13-.0002 208S93.12 416 207.1 416c51.68 0 98.85-18.96 135.2-50.15l141.5 141.5C487.8 510.4 491.9 512 496 512s8.188-1.562 11.31-4.688C513.6 501.1 513.6 490.9 507.3 484.7zM208 384C110.1 384 32 305 32 208S110.1 32 208 32S384 110.1 384 208S305 384 208 384z"></path></svg><!-- <i class="fal fa-search"></i> --></span>
                                      <input type="search" class="form-control form-control-solid text-dark" wire:model="search" placeholder="Transaction reference">
                                  </div>
                              </div>
                          </div>
                                                  <div class="" wire:loading.class.delay="opacity-50" wire:target="search, status, orderBy, perPage, date, loadMore">
                              <div class="card-body pt-0">
                                  <div class="table-responsive">
                                      <table class="table align-middle table-row-bordered table-row-gray-300 gy-5 gs-7" id="kt_datatable_example_5">
                                          <thead>
                                              <tr class="text-start text-dark fw-bolder fs-7 text-uppercase px-7">
                                                  <th></th>
                                                  <th class="min-w-90px">Amount</th>
                                                  <th class="min-w-50px">Type</th>
                                                  <th class="min-w-50px">Status</th>
                                                  <th class="min-w-50px">Reference ID</th>
                                                  <th class="min-w-50px">Description</th>
                                                  <th class="min-w-50px">Scope</th>

                                                  <th class="min-w-200px">Created</th>
                                              </tr>
                                              <!--end::Table row-->
                                          </thead>
<tbody class="fw-semibold text-dark fs-6">


                      
@if ($loans->isEmpty())
                        <p>No loans found.</p>
                    @else
                
					@foreach ($loans as $loan)
  <tr class="cursor-pointer" id="119BANC/IARE94EX-2024">
     
<td>
    <div class="symbol symbol-40px symbol-circle me-5">
        <div class="symbol-label fs-3 fw-bolder text-dark">
                            
            <svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256C432 264.8 424.8 272 416 272h-176V448c0 8.844-7.156 16.01-16 16.01S208 456.8 208 448V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99S240 55.16 240 64v176H416C424.8 240 432 247.2 432 256z"></path></svg><!-- <i class="fal fa-plus"></i> -->
                        </div>
    </div>
   
</td>
<td>€{{ $loan->amount }} EUR</td>
<td><span class="text-success">Loan</span></td>
  
<td><span class="badge badge-pill badge-warning badge-sm">{{ $loan->status == 0 ? 'Pending' : 'Approved' }}</span></td>
    
<td>BANC/IARE94EX-2024</td>
<td>Cryptocurrency Funding</td>
<td>Bank Transfer</td>
<td>{{ $loan->loanDate }}</td>
</tr>

@endforeach


                                          </tbody>
                                      </table>

									  @endif
                                </div>
                              </div>
                          </div>
                     </div>
                  </div>
              </div>

			  
</div>
</div>



                @endsection