<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        .paper {
            padding: 0 40px;
            overflow: hidden;
            background-color: white;
        }

        .text-lg {
            font-size: 1.5rem !important; 
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

        /* .wrapper {
            padding: 100px 400px;
            font-size: 8px;
            background-color: rgb(34, 34, 34);
        } */

        
    </style>
</head>
<body id="body" onload="window.print()">

    <div class="paper">
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
                <h1 class="text-center text-bold mb-5">BARANGAY CLEARANCE</h1>

                <p class="mb-5 text-lg">TO WHOM IT MAY CONCERN:</p>

                <p class="mb-5 text-lg text-justify">
                    This is to certify that {{$resident->last_name }}, {{$resident->first_name }} {{$resident->middle_name }}. {{$resident->suffix }}. of legal age (62) years old, {{$resident->civil_status }} , {{$resident->citizenship }} , and bona fide resident of {{$resident->address }} , Marilao Bulacan is personally known to me to be a person of good moral character and reputation.
                </p>

                <p class="mb-5 text-lg">He / She is a peaceful and law abiding citizen.</p>

                <p class="mb-3 text-lg text-justify">
                    This Certification is issued upon request of interested party Party Name in connection with his/her application for {{ app('request')->clearance_purpose }}
                </p>

                <p class="mb-5 text-lg">Given this day of Sat, 10th of Apr 2021</p>
                <br>
                <br>
                <p class="text-lg signiture">Signiture over Printed Name</p>

                <div class="img-container">
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
</div>


</body>
</html>

<script>
    // prinpage();
    // function prinpage() {
    //     // alert('sdsd');

    //     let paper = document.querySelector('.paper').innerHTML;
    //     document.getElementById('body').innerHTML = paper;
    //     // console.log(body)s
    //     setTimeout(() => {
    //         window.print();
    //     }, 2000)
        
    // }
</script>