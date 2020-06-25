<title>Contact Us</title>
@extends('front_end.layouts.layout')

@section('content')
<section id="fixed-img-part">
    <div class="fixed-image-3">
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 py-5">
                        <div class="py-5">
                            <h1 class="white mt-5" style="text-transform: uppercase;font-weight: bold;">Contact Us
                            </h1>
                            <p class=" white">
                                We don't just repair credit, we educate!
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <!-- <img style="width: 200px;margin: 50% auto" src="./img//logo/CCM02.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end fixed image part  -->

<!-- contact part  -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h6 style="text-transform: uppercase;color: teal;font-weight: bold;">absolutely free, no risk </h6>
                <h1 class=" mt-3" style="text-transform: uppercase;">
                    credit Repair consultation
                </h1>
                <p class="mt-4"><i class="fas fa-search-location mr-2" style="color: teal;"></i>1212 West road #12,
                    Little Hill, New Jarsy 1234</p>
                <hr>
                <p class="py-4"><i>Your one stop shop for all your trusted credit repair needs!</i></p>
                <hr>
                <h4 style="font-weight: bold;">1 405 977 1147</h4>
                <p>Opening Hours: 10 am - 6 pm M-F, 10am - 4pm Every Other Saturday</p>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route("contact-action")}}" method="POST">
                    @csrf
                    <h3 class="my-3">Book an Appointment</h3>
                    <div class="row">
                        <div class="col-6">
                            <label for="firstname">First name</label>
                            <div class="form-group">
                                <input class="form-control" type="text" id="firstname" value="{{old('firstname')}}" name="firstname"
                                    placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="lastname">Last name</label>
                            <div class="form-group">
                                <input class="form-control" type="text" id="lastname" name="lastname" value="{{old('lastname')}}"
                                    placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="phone">Phone number</label>
                            <div class="form-group">
                                <input class="form-control" type="text" id="phone" name="phone" value="{{old('phone')}}"
                                    placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="email">Email address</label>
                            <div class="form-group">
                                <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}"
                                    placeholder="example@gmail.com" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="streetaddress">Street address</label>
                            <div class="form-group">
                                <input class="form-control" type="text" id="streetaddress" name="streetaddress" value="{{old('streetaddress')}}"
                                    placeholder="Street Address" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="cityzip">City, State, Zip</label>
                            <div class="form-group">
                            <input class="form-control" type="text" id="cityzip" name="cityzip" value="{{old("cityzip")}}"
                                    placeholder="City, State, Zip" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="dob">Date of birth</label>
                            <div class="form-group">
                            <input class="form-control" type="date" id="dob" name="dob" value="{{old("dob")}}" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="identitysign">Have you signed up with IdentityIQ?</label>
                            <div class="form-group">
                                <select class="form-control" name="identitysign" id="identitysign" required>
                                    <option value="">IdentityIQ</option>
                                    <option value="PrivecyGuard">PrivecyGuard</option>
                                    <option value="SmartCredit">SmartCredit</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="identityUsername">IdentityIQ Username</label>
                        <input class="form-control" type="text" name="identityUsername" id="identityUsername" value="{{old("identityUsername")}}"
                                placeholder="IdentityIQ Username" required>
                        </div>
                        <div class="col-6">
                            <label for="identityPassword">IdentityIQ Password</label>
                        <input class="form-control" type="password" name="identityPassword" id="identityPassword" value="{{old("identityPassword")}}"
                                placeholder="IdentityIQ Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="ssn">Last 4 Of Your Social Security Number</label>
                        <input class="form-control" type="text" name="ssn" id="ssn" value="{{old("ssn")}}"
                                placeholder="Last 4 Of Your Social Security Number" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="consistentIncome">Do you have a consistent income? (Necessary for rebuilding
                                credit & settling
                                debts for possible deletion)?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="consistentIncome"
                                    id="consistentIncome" value="option1" checked>
                                <label class="form-check-label mr-5" for="consistentIncome">
                                    Yes
                                </label>
    
                                <input class="form-check-input" type="radio" name="consistentIncome"
                                    id="consistentIncome2" value="option2">
                                <label class="form-check-label" for="consistentIncome2">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="finincialBint">Are you currently in a financial bind that will prevent you
                                from paying your bills now or in the near future?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="finincialBint" id="finincialBint1"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="finincialBint1">
                                    Yes
                                </label>
    
                                <input class="form-check-input" type="radio" name="finincialBint" id="finincialBint2"
                                    value="option2">
                                <label class="form-check-label" for="finincialBint2">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="purchasePlan">Are you planning to make a major purchase soon?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="purchasePlan" id="purchasePlan1"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="purchasePlan1">
                                    Purchase a Home
                                </label>
    
                                <input class="form-check-input" type="radio" name="purchasePlan" id="purchasePlan2"
                                    value="option2">
                                <label class="form-check-label" for="purchasePlan2">
                                    Purchase a New Car
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="purchasePlan" id="purchasePlan3"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="purchasePlan3">
                                    Refinance Car
                                </label>
    
                                <input class="form-check-input" type="radio" name="purchasePlan" id="purchasePlan4"
                                    value="option2">
                                <label class="form-check-label" for="purchasePlan4">
                                    Start a Business or Business Loan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="purchasePlan" id="purchasePlan5"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="purchasePlan5">
                                    Qualify for Better Rates/Terms
                                </label>
    
                                <input class="form-check-input" type="radio" name="purchasePlan" id="purchasePlan6"
                                    value="option2">
                                <label class="form-check-label" for="purchasePlan6">
                                    No I just want Good Credit
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="doyoudisput">Have you or another company disputed any items on your credit
                                report within the last 6mths, INCLUDING Credit Karma?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="doyoudisput" id="doyoudisput1"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="doyoudisput1">
                                    Yes
                                </label>
    
                                <input class="form-check-input" type="radio" name="doyoudisput" id="doyoudisput2"
                                    value="option2">
                                <label class="form-check-label" for="doyoudisput2">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="activeChepter7">Are You Currently In An Active Chapter 7 or 13 that has "Not"
                                Been
                                Discharged or Dismissed?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="activeChepter7" id="activeChepter1"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="activeChepter1">
                                    Yes
                                </label>
    
                                <input class="form-check-input" type="radio" name="activeChepter7" id="activeChepter2"
                                    value="option2">
                                <label class="form-check-label" for="activeChepter2">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="isAboveTure">I hereby certify that the above information is true and correct
                                to the best of my knowledge. I understand that a false statement may disqualify me from
                                services, now and in the future.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="isAboveTure" id="isAboveTure1"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="isAboveTure1">
                                    True
                                </label>
    
                                <input class="form-check-input" type="radio" name="isAboveTure" id="isAboveTure2"
                                    value="option2">
                                <label class="form-check-label" for="isAboveTure2">
                                    False
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="doUauthoriseMe">I Authorize CarsonX Credit Repair LLC, to access my credit
                                information to see if I am eligible for any of their Programs and Services. I understand
                                that I am authorizing CarsonX Credit Repair LLC to contact me and that I am under no
                                obligation to enroll in any services.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="doUauthoriseMe" id="doUauthoriseMe1"
                                    value="option1" checked>
                                <label class="form-check-label mr-5" for="doUauthoriseMe1">
                                    True
                                </label>
    
                                <input class="form-check-input" type="radio" name="doUauthoriseMe" id="doUauthoriseMe2"
                                    value="option2">
                                <label class="form-check-label" for="doUauthoriseMe2">
                                    False
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="appoinment">Schedule an Appointment</label>
                            <input class="form-control" type="date" name="appoinment" id="appoinment" >
                        </div>
                        <div class="col-12 form-group">
                            <!-- <label for="appoinment">Schedule an Appointment</label> -->
                            <select name="preferedtime" id="preferedtime" class="form-control">
                                <option value="" active>Preferred Time Window</option>
                                <option value="Morning">Morning (Opening untill Noon)</option>
                                <option value="Afternoon">Afternoon (Noon untill 2 PM)</option>
                                <option value="Evening">Evening (2 PM untill closing)</option>
                                <option value="Anytime">Anytime</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="leavecomment">Do you have any other concerns, questions or comments?</label>
                            <textarea class="form-control" name="leavecomment" id="leavecomment" cols="30"
                             rows="5">{{old("leavecomment")}}</textarea>
                            <button class="mt-4 book-btn" style="margin-left: 0;">BOOK NOW</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection