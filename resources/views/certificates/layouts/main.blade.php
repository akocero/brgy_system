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

        .border-top {
            /* padding: 6px; */
            border-top: 1.5px solid rgba(128, 128, 128, 0.336) !important;
            text-align: center;
        }

        

        ul > li {
            margin-bottom: 1.8rem;
            font-size: 1.1rem !important; 
            font-weight: 400;
        }

        @media screen {
            .header, .footer, .officer, .main {
                display: none;
            }
        }
         
        @media print {
            .pdf-text-md {
                font-size: 1.5rem !important; 
                font-weight: 400;
            }

            .pdf-text-sm {
                font-size: 1.2rem !important; 
                font-weight: 400;
            }

            .officer {
                border-right: 1px solid rgba(128, 128, 128, 0.336);
            }

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

            .footer .footer__person-img {
                width: 35%;
                position: absolute;
                top: -65%;
                right: 1rem;
            }

            .footer .footer__signature-img {
                width: 27%;
                position: absolute;
                top: -50%;
                right: 27%;
            }

            .footer .footer__person_name {
                width: 50%;
                position: absolute;
                top: -32%;
                right: 15%;
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
<body id="body" onload="window.print()">

    <div class="paper"> 
        @include('certificates.layouts.header')
    
    <div class="row main">
        @include('certificates.layouts.officer')

        @yield('certificate_content')
    </div>

    @include('certificates.layouts.footer')
</div>


</body>
</html>