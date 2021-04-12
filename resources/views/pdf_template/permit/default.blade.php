<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        img {
            width: 60%;
        }

        ul {
            list-style-type: none;
        }

        * {
            padding: 0;
            margin: 0;
        }
        body {
            padding: 0 40px;
        }

        .text-lg {
            font-size: 1.2rem !important; 
            font-weight: 600;
        }

        .text-xl {
            font-size: 1.2rem !important; 
            font-weight: 600;
        }

        .officer {
            border-right: 1px solid rgba(128, 128, 128, 0.336);
        }

        .img-container {
            position: relative;
        }

        .img-container > img {
            position: absolute;
            top: -100px;
            width: 50%;
            right: -20px;
            border: red;
        }
        .signiture {
            border-top: 1px solid grey;
            display: inline;
        }
    </style>
</head>
<body>
    <div class="row text-center mb-4">
        <div class="col-md-3 text-right pt-5">
            <img src="{{ asset('storage/images/logo/brgy_logo.png') }}">
        </div>
        <div class="col-md-6 pt-5">
            <h2>
                <span><strong>Republic of the Philippines</strong></span><br>
                <span>Province of Bulacan</span><br>
                <span>Municipality of Marilao</span><br><br>
                <span><strong>Barangay Sta. Rosa 1</strong></span><br>
            </h2>
        </div>
        <div class="col-md-3 text-left pt-5">
            <img src="{{ asset('storage/images/logo/city_logo.png') }}">
        </div>
    </div>
    <hr>
    <h3 class="text-center text-bold">OFFICE OF THE SANGGUNIANG BARANGAY</h3>
    <hr>
    <br>
    <div class="row mt-3">
        <div class="col-md-3 officer">
            <ul class="text-center ">
                <li class="mb-5">
                    <h3 class="">Council Members</h3>
                </li>
                <li class="mb-5">
                    <ul class="mb-1">
                        <li>
                            <h4 class="mb-3">Eugene Paul M. Badato</h4>
                        </li>
                        <li>
                            <h4 class="mb-3">Eugene Paul M. Badato</h4>
                        </li>
                        <li>
                            <h4 class="mb-3">Eugene Paul M. Badato</h4>
                        </li>
                        <li>
                            <h4 class="mb-3">Eugene Paul M. Badato</h4>
                        </li>
                        <li>
                            <h4 class="mb-3">Eugene Paul M. Badato</h4>
                        </li>
                         <li>
                            <h4 class="mb-3">Eugene Paul M. Badato</h4>
                        </li>
                         <li>
                            <h4 class="mb-3">Eugene Paul M. Badato</h4>
                        </li>
                    </ul>
                </li>
                <br>
                <li>
                    <ul>
                        <li class="mb-4">
                            <h4 class="">SK CHARIMAN NAME</h4>
                            <label>Barangay Secretary</label>
                        </li>
                        <li class="mb-4">
                            <h4 class="">SK CHARIMAN NAME</h4>
                            <label>Barangay Treasurer</label>
                        </li>
                        <li class="mb-4">
                            <h4 class="">SK CHARIMAN NAME</h4>
                            <label>Barangay Administrator</label>
                        </li>
                        <li class="mb-4">
                            <h4 class="">SK CHARIMAN NAME</h4>
                            <label>Barangay Clerk</label>
                        </li>
                        <li class="mb-4">
                            <h4 class="">SK CHARIMAN NAME</h4>
                            <label>Barangay Record Keeper</label>
                        </li>
                        
                    </ul>
                </li>
            </ul>
            
        </div>
        <div class="col-md-9 pl-5">
                <h1 class="text-center text-bold">BARANGAY BUSINESS PERMIT {{ $resident->first_name}}</h1>

                <p class="mb-5 text-lg text-center">This is to certify that the business or trade activity described below:</p>

                <hr>
                <p class="mb-5 text-xl text-center">(Business / Trade Name)</p>
                <hr>
                <p class="mb-5 text-xl text-center">(Location)</p>
                <hr>
                <p class="mb-5 text-xl text-center">(Operation / Manager)</p>
                <hr>
                <p class="mb-3 text-xl text-center">(Address)</p>

                <p class="mb-4 text-lg text-justify">
                    Proposed to be established in this Barangay and is being applied for a Barangay Business Clearance to be used is securing a corresponding Municipal Permit has been found to be in conformity with the provisions of existing Barangay ordinances, rules and regulation being enforced in this Barangay.
                </p>

                <p class="mb-4 text-lg">In view of the foregning, the undersigned interposes no Objections for issuance of the corresponding Municipal Permit being applied for.</p>

                <p class="mb-3 text-lg text-justify">
                    Issued this Sat, 10th of Apr 2021 at Sta Rosa 1, <br> Marilao. Bulacan.
                </p>
                
                <div class="img-container">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="text-lg pt-5">
                        <span class="text-md">This Barangay Clearance is not valid <br> without br dry seal</span><br><br>
                        <span>CTC No         :</span><br>
                        <span>Issued at      : Brgy Sta Rosa 1</span><br>
                        <span>Date issued  : 10/04/2021</span><br>
                    </p>

                    <img src="{{ asset('storage/images/logo/captain_image.png')}}" alt="">
                </div>
        </div>
    </div>
</body>
</html>