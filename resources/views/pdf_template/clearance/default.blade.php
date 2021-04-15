<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: rgb(34, 34, 34);
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .paper {
            /* background: url('/asset/storage/images/logo/city_logo.png'); */
            background-size: cover;
            padding: 0 40px;
            overflow: hidden;
            background-color: white;
        }

        .pdf-text-md {
            font-size: 1.5rem !important; 
            font-weight: 600;
        }

        ul > li {
            margin-bottom: 2rem;
        }

        @media screen {
            .header, .footer, .officer, .main {
                /* display: none; */
            }
        }
         
        @media print {
            .officer {border-right: 1px solid rgba(128, 128, 128, 0.336);}

            .signiture {
                margin-top: 5rem;
                border-top: 1px solid grey;
                display: inline-block;
            }

            .footer {
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .footer .footer__img {
                width: 35%;
                position: absolute;
                top: -75%;
                right: 4%;
            }

            .footer .footer__text-content {padding-left: 2rem;}

            .header {width: 100%;}
            .header img {width: 60%;}

            .header .border-y {
                padding: 6px;
                border: 1px solid rgba(128, 128, 128, 0.336);
                border-left: none;
                border-right: none;  
            }
        }
    </style>
</head>
<body id="body">

    <div class="paper">
        @include('pdf_template.layouts.header')
    
    <div class="row main">

        @include('pdf_template.layouts.officer')

        <div class="col-md-9 pl-5">
            <h1 class="text-center text-bold mb-5 main__header">BARANGAY CLEARANCE</h1>

            <p class="mb-5 pdf-text-md">TO WHOM IT MAY CONCERN:</p>

            <p class="mb-5 pdf-text-md text-justify">
                This is to certify that {{$resident->last_name }}, {{$resident->first_name }} {{$resident->middle_name }}. {{$resident->suffix }}. of legal age (62) years old, {{$resident->civil_status }} , {{$resident->citizenship }} , and bona fide resident of {{$resident->address }} , Marilao Bulacan is personally known to me to be a person of good moral character and reputation.
            </p>

            <p class="mb-5 pdf-text-md">He / She is a peaceful and law abiding citizen.</p>

            <p class="pdf-text-md text-justify">
                This Certification is issued upon request of interested party Party Name in connection with his/her application for {{ app('request')->clearance_purpose }}
            </p>

            <p class="pdf-text-md">
                Given this day of Sat, 10th of Apr 2021
            </p>

            <p class="pdf-text-md signiture">
                Signiture over Printed Name
            </p>
        </div>
    </div>

    @include('pdf_template.layouts.footer')
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