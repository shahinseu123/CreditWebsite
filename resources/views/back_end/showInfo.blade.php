<title>Show info</title>
@extends('back_end.layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Customer quey details</h2>
            </div>
            <div class="card-body">
                @if ($info)
                    
                    <ul class="info-info">
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Name:</p>
                                </div>
                                <div class="col-6">
                                <p style="text-align: right">{{$info->firstname}} {{$info->lastname}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Email:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->email}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Phone:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->phone}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Address:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->streetaddress}},{{$info->cityzip}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Date of birth:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->dob}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Identity sign:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->identitysign}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>IdentityIQ username:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->identityUsername}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>IdentityIQ password:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->identityPassword}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>SSN:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->ssn}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Consistent Income:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->consistentIncome}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Finincial Bind:</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->finincialBint}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Purchase plan :</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->purchasePlan}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Active Chepter 7 :</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->activeChepter7}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Is everything above true :</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->isAboveTure}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Do you authorise me :</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->doUauthoriseMe}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Get an appoinment :</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->appoinment}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Prefered time :</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->preferedtime}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                <p>Leave comment :</p>
                                </div>
                                <div class="col-6">
                                    <p style="text-align: right">{{$info->leavecomment}}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('head')
    <style>
            .info-info{
                list-style-type: none;
                padding: 10px;
                background-color: #fcfcfc;
                /* -webkit-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.75); */
                background: #fcfcfc;

            }
            .info-info li{
                padding-left: 40px;
                padding-right:  40px;
                padding-top: 10px; 
                border: 1px solid lightgray;
                margin-bottom: 2px;
                -webkit-box-shadow: 9px 9px 5px -8px rgba(0,0,0,0.75);
-moz-box-shadow: 9px 9px 5px -8px rgba(0,0,0,0.75);
box-shadow: 9px 9px 5px -8px rgba(0,0,0,0.75);
                
            }
            .info-info li:hover{
                background-color: lightseagreen;
                color: white;
            }
    </style>
@endsection