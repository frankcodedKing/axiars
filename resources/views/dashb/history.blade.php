@extends('dashblayout.dashlayout')
@section('body')


        <!-- Page title -->
    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
    
      <div class="toolbar" id="kt_toolbar">
          <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
              <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                  <h1 class="text-dark fw-bolder my-1 fs-2">Transactions</h1>
                  <ul class="breadcrumb fw-semibold fs-base my-1">
                      <li class="breadcrumb-item text-muted">
                          <a href="https://bs-abadelb.com/dashboard" class="text-muted text-hover-primary">Dashboard </a>
                      </li>
                      <li class="breadcrumb-item text-dark">Transactions</li>
                  </ul>
              </div>
              <div class="d-flex align-items-center flex-nowrap text-nowrap py-1 mb-10">
                  <button data-bs-toggle="modal" data-bs-target="#filter" class="btn btn-white text-dark me-4"><svg class="svg-inline--fa fa-filter-list" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="filter-list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M324.4 64C339.6 64 352 76.37 352 91.63C352 98.32 349.6 104.8 345.2 109.8L240 230V423.6C240 437.1 229.1 448 215.6 448C210.3 448 205.2 446.3 200.9 443.1L124.7 385.6C116.7 379.5 112 370.1 112 360V230L6.836 109.8C2.429 104.8 0 98.32 0 91.63C0 76.37 12.37 64 27.63 64H324.4zM144 224V360L208 408.3V223.1C208 220.1 209.4 216.4 211.1 213.5L314.7 95.1H37.26L140 213.5C142.6 216.4 143.1 220.1 143.1 223.1L144 224zM496 400C504.8 400 512 407.2 512 416C512 424.8 504.8 432 496 432H336C327.2 432 320 424.8 320 416C320 407.2 327.2 400 336 400H496zM320 256C320 247.2 327.2 240 336 240H496C504.8 240 512 247.2 512 256C512 264.8 504.8 272 496 272H336C327.2 272 320 264.8 320 256zM496 80C504.8 80 512 87.16 512 96C512 104.8 504.8 112 496 112H400C391.2 112 384 104.8 384 96C384 87.16 391.2 80 400 80H496z"></path></svg><!-- <i class="fal fa-filter-list"></i> --> Filter</button>
                  <button data-bs-toggle="modal" data-bs-target="#export" class="btn btn-dark"><svg class="svg-inline--fa fa-file-export" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M571.3 308.7l-96-96c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62L521.4 304H208C199.2 304 192 311.2 192 320s7.156 16 16 16h313.4l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.62C455.8 430.4 459.9 432 464 432s8.188-1.562 11.31-4.688l96-96C577.6 325.1 577.6 314.9 571.3 308.7zM368 384c-8.836 0-16 7.164-16 16V448c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V64c0-17.67 14.33-32 32-32h128v112C192 170.5 213.5 192 240 192H352v48C352 248.8 359.2 256 368 256C376.8 256 384 248.8 384 240V170.5c0-16.97-6.742-33.26-18.75-45.26L258.7 18.74C246.7 6.742 230.5 0 213.5 0H63.1C28.65 0 0 28.65 0 64l.0065 384c0 35.35 28.66 64 64 64H320c35.35 0 64-28.65 64-64v-48C384 391.2 376.8 384 368 384zM224 34.08c4.477 1.566 8.666 3.846 12.12 7.299l106.5 106.5C346.1 151.3 348.4 155.5 349.9 160H240C231.2 160 224 152.8 224 144V34.08z"></path></svg><!-- <i class="fal fa-file-export"></i> --> Export</button>
              </div>
          </div>
          <div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">
              <div class="container">
                  <div class="row g-xl-8">
                      <div wire:ignore.self="" class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h3 class="modal-title">Filter Transaction</h3>
                                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                          <span class="svg-icon svg-icon-1">
                                              <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"></path></svg><!-- <i class="fal fa-times"></i> -->
                                          </span>
                                      </div>
                                  </div>
                                  <div class="modal-body">
                                      <div class="fv-row mb-6">
                                          <label class="form-label fs-6 fw-bolder text-dark">Date Range</label>
                                          <input class="form-control form-control-lg form-control-solid" placeholder="Pick date rage" value="1691490869836 - 1689485801227" name="date" id="range" onchange="this.dispatchEvent(new InputEvent('input'))" wire:model="date">
                                      </div>
                                      <div class="fv-row mb-6">
                                          <label class="form-label fs-6 fw-bolder text-dark">Status</label>
                                          <select class="form-select form-select-solid" wire:model="status">
                                              <option value="">Select status</option>
                                              <option value="COMPLETED">Completed</option>
                                              <option value="PENDING">Pending</option>
                                          </select>
                                      </div>
                                      <div class="fv-row mb-6">
                                          <label class="form-label fs-6 fw-bolder text-dark">Sort by</label>
                                          <select class="form-select form-select-solid" wire:model="orderBy">
                                              <option value="asc">ASC</option>
                                              <option value="desc">DESC</option>
                                          </select>
                                      </div>
                                      <div class="fv-row mb-6">
                                          <label class="form-label fs-6 fw-bolder text-dark">Per page</label>
                                          <select class="form-select form-select-solid" wire:model="perPage">
                                              <option value="10">10</option>
                                              <option value="25">25</option>
                                              <option value="50">50</option>
                                              <option value="100">100</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div wire:ignore.self="" class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h3 class="modal-title">Export Transactions</h3>
                                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                          <span class="svg-icon svg-icon-1">
                                              <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"></path></svg><!-- <i class="fal fa-times"></i> -->
                                          </span>
                                      </div>
                                  </div>
                                  <form wire:submit.prevent="save(Object.fromEntries(new FormData($event.target)))">
                                      <div class="modal-body">
                                          <input type="hidden" name="_token" value="qNuplysOgRVxc2sjYh0qmlz5SYKUtCZFmPKq0wJO">                                        <div class="fv-row mb-6">
                                              <label class="form-label fs-6 fw-bolder text-dark">File Format</label>
                                              <select class="form-select form-select-solid" name="exportType" required="">
                                                  <option value="">Select file type</option>
                                                  <option value="csv">CSV</option>
                                                  <option value="excel">Excel</option>
                                              </select>
                                          </div>
                                                                                  <div class="fv-row mb-6">
                                              <label class="form-label fs-6 fw-bolder text-dark">Export as</label>
                                              <select class="form-select form-select-solid" name="exportAs" required="">
                                                  <option value="">How do you want to receive this file?</option>
                                                  <option value="download">Download file</option>
                                                  <option value="email">Send file to email</option>
                                              </select>
                                          </div>
                                                                              </div>
                                      <div class="modal-footer">
                                          <button class="btn btn-block btn-primary" type="submit"><svg class="svg-inline--fa fa-file-export" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M571.3 308.7l-96-96c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62L521.4 304H208C199.2 304 192 311.2 192 320s7.156 16 16 16h313.4l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.62C455.8 430.4 459.9 432 464 432s8.188-1.562 11.31-4.688l96-96C577.6 325.1 577.6 314.9 571.3 308.7zM368 384c-8.836 0-16 7.164-16 16V448c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V64c0-17.67 14.33-32 32-32h128v112C192 170.5 213.5 192 240 192H352v48C352 248.8 359.2 256 368 256C376.8 256 384 248.8 384 240V170.5c0-16.97-6.742-33.26-18.75-45.26L258.7 18.74C246.7 6.742 230.5 0 213.5 0H63.1C28.65 0 0 28.65 0 64l.0065 384c0 35.35 28.66 64 64 64H320c35.35 0 64-28.65 64-64v-48C384 391.2 376.8 384 368 384zM224 34.08c4.477 1.566 8.666 3.846 12.12 7.299l106.5 106.5C346.1 151.3 348.4 155.5 349.9 160H240C231.2 160 224 152.8 224 144V34.08z"></path></svg><!-- <i class="fal fa-file-export"></i> -->
                                              <span wire:loading.remove="" wire:target="save">Export</span>
                                              <span wire:loading="" wire:target="save">Exporting file...</span>
                                          </button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
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
                
  <tr class="cursor-pointer" id="119BANC/IARE94EX-2024">
     
<td>
    <div class="symbol symbol-40px symbol-circle me-5">
        <div class="symbol-label fs-3 fw-bolder text-dark">
                            
            <svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256C432 264.8 424.8 272 416 272h-176V448c0 8.844-7.156 16.01-16 16.01S208 456.8 208 448V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99S240 55.16 240 64v176H416C424.8 240 432 247.2 432 256z"></path></svg><!-- <i class="fal fa-plus"></i> -->
                        </div>
    </div>
   
</td>

@if ($userdeposits)

@foreach ($userdeposits as $deposit)

    <td>€{{$deposit->amount}} EUR</td>
    <td><span class="text-success">Deposit</span></td>
    
    <td>
    {!! $deposit->status > 0 ? '<span class="badge badge-pill badge-warning badge-sm">Completed</span>' : '<span class="badge badge-pill badge-warning badge-sm">Pending</span>' !!}

    <td>BANC/IAJKX-203984</td>
    <td>Cryptocurrency Funding</td>
    <td>Bank Transfer</td>
    <td>{{$deposit->depositDate}}</td>
    </tr>

@endforeach
                       
 @else
    
                      
                           
@endif



                                          </tbody>
                                      </table>
                                </div>
                              </div>
                          </div>
                     </div>
                  </div>
              </div>
  
            
          </div>
      </div>
  </div>   </div>











<!-- HERE HERE HERE -->
























              
 <!-- content @s -->
 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="javascript: history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>(go back)</span></a></div>
                                        <h2 class="nk-block-title fw-normal">Account History</h2>
                                      

                                        <div class="nk-block-des">
                                            <p class="lead"><strong>Aspen</strong> understands the need for <strong> accurately storing and organizing your history data for statistical computing, so here are all your account histories.</strong></p><strong>
                                        </strong></div><strong>
                                    </strong></div><strong>
                                </strong></div><!-- nk-block-head --><strong>
                                <div class="nk-block nk-block-lg">
                                                                                                                                                                                                                                  <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Deposit Transactions</h4>
                                            <p>The following contains all deposit transactions made in your portfolio.
                                            
                                          
                                        </p></div>
                                    </div>
                                    

                                    <div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Amount</th>
                        <th class="border-0">Deposit Date</th>
                        <th class="border-0">Method</th>
                        <th class="border-0">Address</th>
                        <th class="border-0">Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                       {{-- for each $userdeposits as $deposits --}}

                       @if ($userdeposits)

                       @foreach ($userdeposits as $deposit)

                            <!-- Item -->
                   <tr>
                       <td>{{$loop->index + 1}}  </td>

                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                               <span class="fw-bold">{{$deposit->amount}}</span>
                           </div>
                       </td>

                       <td class="fw-bold d-flex align-items-center">
                           {{$deposit->depositDate}}
                       </td>
                       
                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                               <span class="fw-bold">{{$deposit->method =='btc_address'?'Bitcoin': ""}} {{$deposit->method =='eth'?'Ethereum': "" }} {{$deposit->method =='usdt'?'USDT ': ""}}</span>
                           </div>
                       </td>
                      
                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                               <span class="fw-bold">{{$deposit->methodAccount}}</span>
                           </div>
                       </td>

                       <td class="text-dark">
                           <div class="d-flex align-items-center">
                    {!! $deposit->status > 0? "<span class='fw-bold'>Completed</span></td>": "<span class='fw-bold'>Pending</span></td>" !!}
                               {{-- <span class="fw-bold">Completed</span> --}}
                           </div>
                       </td>
                   </tr>
                   <!-- End of Item -->
                           
                       @endforeach
                       
                   @else

                  
                       
                   @endif
                 
                  
                </tbody>
            </table>
        </div>
    </div>
</div>



                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Withdrawal Transactions</h4>
                                            <p>The following contains all Withdrawal transactions made in your portfolio.
                                            </p></div>
                                    </div>

                                    <!-- JCBDIBEOICUEBSBKJCBDSJCDBHJBDCJBJHDCBJDCBJHDCBJHDCBJHSBDH -->

                                    <div class="card border-0 shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr  style='text-align:center';>
                                                    <th class="border-0 rounded-start">#</th>
                                                    <th class="border-0">Amount</th>
                                                    <th class="border-0">Withdrawal Date</th>
                                                    <th class="border-0">Method</th>
                                                    <th class="border-0">Address</th>
                                                    <th class="border-0">Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @if ($withdrawals)
                                                @foreach ($withdrawals as $withdrawal )

                                                <tr>
                                                    <td class="text-dark">{{$loop->index + 1}}</td>
                                                    
                                                    <td class="text-dark">$ {{$withdrawal->amount}}</td>
                                                    <td class="text-dark">{{Carbon\Carbon::parse($withdrawal->created_at)->diffForHumans()}}</td>
                                                    <td class="text-dark">{{$withdrawal->method =='Btc'?'Bitcoin': ""}} {{$withdrawal->method =='Eth'?'Ethereum': "" }} {{$withdrawal->method =='USDT'?'USDT ': ""}} {{$withdrawal->method =='BTC'?'Bitcoin ': ""}} {{$withdrawal->method =='ETH'?'Ethereum ': ""}}</td>
                                                    <td class="text-dark">{{$withdrawal->methodaccount}}
                                                        <td class="text-dark"> {!! $withdrawal->status > 0? "<span class='fw-bold'>Completed</span></td>": "<span class='fw-bold'>Pending</span></td>" !!}</td>

                                                    </td>
                                                
                                                </tr>

                                                @endforeach

                                                @endif


                                            </tbody>





                                        </table>
                                    </div>
                                </div>
                                </div>




<!-- CERNCHEBRKBJKCBFNDSBJHBERLKJBLSDKJBLKJBDKLUBD -->

<div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title"> Compoundings</h4>
                                            <p>The following contains all compounding transactions.
                                        </p></div>
                                    </div>

                                    <!-- JCBDIBEOICUEBSBKJCBDSJCDBHJBDCJBJHDCBJDCBJHDCBJHDCBJHSBDH -->

                                    <div class="card border-0 shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-0 rounded-start">#</th>
                                                    <th class="border-0">Amount</th>
                                                    <th class="border-0">Date</th>
                                                    <th class="border-0">From</th>
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @if ($compoundings)
                                                @foreach ($compoundings as $compounding )

                                                <tr>
                                                    <td class="text-dark">{{$loop->index + 1}}</td>
                                                    
                                                    <td class="text-dark" style="">$ {{$compounding->amount}}</td>
                                                    <td class="text-dark">{{Carbon\Carbon::parse($compounding->created_at)->diffForHumans()}}</td>
                                                    <td class="text-dark">{{$compounding->from}}</td>

                                                    </td>
                                                
                                                </tr>

                                                @endforeach

                                                @endif


                                            </tbody>





                                        </table>
                                    </div>
                                </div>
                                </div>


                                </div><!-- nk-block -->
                            </strong></div><strong>
                        </strong></div><strong>
                    </strong></div><strong>
                </strong></div>
                
@endsection
