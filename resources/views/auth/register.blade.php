@extends('layouts.customlayout')
@section('body')



<div class="page-loading active text-indigo">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span></span>
    </div>
    
  </div>
  <div class="d-flex justify-content-center">
     
    <div id="google_translate_element"></div>
    
    </div>
  
  

     
  <!--beginMain-->
  <div class="d-flex flex-column flex-root">
    <!--beginAuthentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
      <!--beginAside-->
      <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative d-none d-xl-block">
        <!--beginWrapper-->
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
          <!--beginHeader-->
          <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
            <!--beginLogo-->
            <a href="" class="py-9 pt-lg-20">
              <img alt="Logo" src="https://bs-abadelb.com/storage/app/public/photos/Tq7LTKTMLMS7cX4I6422Rfd0ulnLgqRn1Ov2Mv00.png" style="height:auto; max-width:30%;"/>
            </a>
            <!--endLogo-->
            <!--beginTitle-->
            <h1 class="fw-bolder text-white fs-2qx pb-5 pb-md-10">Swift Money Transfer</h1>
            <!--endTitle-->
            <!--beginDescription-->
            <p class="fw-bold fs-2 text-white">Swift and Secure Money Transfer to any bank account will become a breeze with Banc Online S-abadel.
            </p>
            <!--endDescription-->
          </div>
          <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-300px" style="background-image: url('{{ asset('bsassets/public/dashboard/media/illustrations/sport.png') }}')"></div>

          <!--endHeader-->
        </div>
        <!--endWrapper-->
      </div>
      <div class="d-flex flex-column flex-lg-row-fluid py-10 ">
  <div class="d-flex flex-center flex-column flex-column-fluid">
   <div class="text-center">
                 <a href="/">
                   <img src="https://bs-abadelb.com/storage/app/public/photos/Tq7LTKTMLMS7cX4I6422Rfd0ulnLgqRn1Ov2Mv00.png"
                        alt="Logo" class="w-50">
                         </a>
                                        </div>
                                        
                                         
    <div class="w-lg-600px w-100 w-100 p-10 p-lg-15 mx-auto">


    <form class="form w-100" action="{{ route('register') }}" method="POST" id="kt_sign_up_form" novalidate="novalidate">
              @csrf
              <div class="text-center mb-10">
                <h1 class="text-dark mb-3">Account Information</h1>
                <div class="text-gray-600 fw-bold fs-4">
                  <p> Please enter your information and proceed to the next step so we can build your accounts.</p>
                </div>
              </div>
              <div class="row fv-row mb-6">
                <div class="col-xl-12">
                  <label class="form-label fw-bolder text-dark fs-6">Legal Full Name</label>
                  <input class="form-control form-control-lg form-control-solid" type="text" name="name"
                  value=""  autocomplete="off" value="" required placeholder="Full name" />
                        
                     
                </div>
                
               
              </div>

              <div class="row fv-row mb-6">
              
                <div class="col-xl-12">
                  <label class="form-label fw-bolder text-dark fs-6"> User Name</label>
                  <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" value="" required placeholder="Enter Unique Username" />
                           
                </div>
               
              </div>
              <div class="fv-row mb-6">
                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                <input class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="email" value="" required placeholder="name@email.com" />
                     
              </div>
              <div class="fv-row mb-6">
                <label class="form-label fs-6 fw-bolder text-dark">Phone</label>
                <div class="input-group mb-3">
                  
                  <input class="form-control form-control-lg form-control-solid" type="tel" name="phone" autocomplete="phone" value="" required placeholder="+123456789" />
                </div>
                                        </div>

                        <div class="fv-row mb-6">
                            <label class="form-label fs-6 fw-bolder text-dark">Country</label>
                            <div class="input-group mb-3">
                              
                                <select class="form-control form-control-lg form-control-solid" name="country" id="country"  required  />
                                <option selected disabled>Choose Country</option>
                                <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>                            </select>
                            </div>
                                                                </div>


                                    <div class="fv-row mb-6">
                                      <label class="form-label fs-6 fw-bolder text-dark">Account Type</label>
                                      <div class="input-group mb-3">
                                        
                                        <select class="form-control form-control-lg form-control-solid" name="acc_type"   required />
                                
                                        <option value="">Please select Account Type</option> 
                                                                   <option value="Checking Account">Checking Account</option>
                                                                   <option value="Savings Account">Saving Account</option>
                                                                   <option value="Fixed Deposit Account">Fixed Deposit Account</option>
                                                                   <option value="Current Account">Current Account</option>
                                                                   <option value="Crypto Currency Account">Crypto Currency Account</option>
                                                                   <option value="Business Account">Business Account</option>
                                                                   <option value="Non Resident Account">Non Resident Account</option>
                                                                   <option value="Cooperate Business Account">Cooperate Business Account</option>
                                                                   <option value="Investment Account">Investment Account</option>
                            </select>
                                      </div>
                                      
                                              </div>
                                              <div class="fv-row mb-6">
                                                <label class="form-label fs-6 fw-bolder text-dark">4 Digit Transaction Pin</label>
                                                <div class="input-group mb-3">
                                                  
                                                  <input class="form-control form-control-lg form-control-solid"  name="pin"  type='password' required placeholder="Transaction Pin " />
                                                </div>
                                                
                                                        </div>
                                                      


              <div class="fv-row mb-10" data-kt-password-meter="true">
                <div class="d-flex flex-stack mb-2">
                  <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                </div>
                <div class="position-relative mb-3">
                  <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" required data-toggle="password" id="password" />
                  <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 input-password" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye fs-2 text-dark"></i>
                  </span>
      
                                  </div>
                <div class="fv-row mb-10" data-kt-password-meter="true">
                  <div class="d-flex flex-stack mb-2">
                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Confirm Password</label>
                  </div>
                  <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password_confirmation"
                    value="" autocomplete="off" required data-toggle="password" id="password_confirmation" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 input-password" data-kt-password-meter-control="visibility">
                      <i class="bi bi-eye fs-2 text-dark"></i>
                    </span>
        
                                      </div>

          

          
        <div class="form-check form-check-custom form-check-solid mb-6">
          <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="" required />
          <label class="form-check-label" for="flexCheckDefault">I agree to our <a href="terms">terms &amp; conditions</a></label>
        </div>
                <div class="text-center">
          <button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2" id="kt_sign_up_submit">
            <span class="indicator-label">Submit</span>
          </button>
        </button>
        <a href="/login" class="btn btn-light btn-lg btn-block fw-bolder my-2">
            <i class="fal fa-arrow-left"></i> Sign In
        </a>   
                  </div>
      </form>


  
           
        
                  </div>
   </div>
  </div>


  <!-- body -->

  <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
    
  </div></div>
    </div>
    <!--end::Authentication - Sign-in-->
  </div>
  



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- </body> -->
</main>
 @endsection

