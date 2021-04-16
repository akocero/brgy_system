@extends('certificates.layouts.main')

@section('certificate_content')
<div class="col-md-9 pl-5">
    <h1 class="text-center text-bold mb-5 main__header">BARANGAY CLEARANCE</h1>

    <p class="mb-5 pdf-text-md">TO WHOM IT MAY CONCERN:</p>

    <p class="mb-5 pdf-text-md text-justify">
        This is to certify that <span class="text-bold">{{$resident->last_name }}, {{$resident->first_name }} {{$resident->middle_name }}. {{$resident->suffix }}</span>. of legal age (62) years old, <span class="text-bold">{{$resident->civil_status }} , {{$resident->citizenship }}</span> , and bona fide resident of <span class="text-bold">{{$resident->address }}</span> , Marilao Bulacan is personally known to me to be a person of good moral character and reputation.
    </p>

    <p class="mb-5 pdf-text-md">He / She is a peaceful and law abiding citizen.</p>

    <p class="pdf-text-md text-justify">
        This Certification is issued upon request of interested party Party Name in connection with his/her application for <span class="text-bold">{{ $clearance_purpose }}</span>
    </p>

    <p class="pdf-text-md">
        Given this day of Sat, 10th of Apr 2021
    </p>

    <p class="pdf-text-md signiture">
        Signiture over Printed Name
    </p>
</div>
@endsection
