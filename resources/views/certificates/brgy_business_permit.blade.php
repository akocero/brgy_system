@extends('certificates.layouts.main')

@section('certificate_content')
<div class="col-md-9 pl-5">
    <h1 class="text-center text-bold mb-5 main__header">BARANGAY BUSINESS PERMIT</h1>

    <p class="mb-3 pdf-text-sm">This is to certify that the business or trade activity described below:</p>

    <div class="pdf-text-md text-center">{{ $business->name }}</div>
    <p class="mb-3 pdf-text-sm border-top">(Business / Trade Name)</p>

    <div class="pdf-text-md text-center">{{ $business->location }}</div>
    <p class="mb-3 pdf-text-sm border-top">(Location)</p>

    <div class="pdf-text-md text-center">{{ $business->operator }}</div>
    <p class="mb-3 pdf-text-sm border-top">(Operation / Manager)</p>

    <div class="pdf-text-md text-center">{{ $business->address }}</div>
    <p class="mb-4 pdf-text-sm border-top">(Address)</p>
    

    <p class="mb-4 pdf-text-sm text-justify">
       Proposed to be established in this Barangay and is being applied for a Barangay Business Clearance to be used is securing a corresponding Municipal Permit has been found to be in conformity with the provisions of existing Barangay ordinances, rules and regulation being enforced in this Barangay.
    </p>

    <p class="pdf-text-sm text-justify">
        In view of the foregning, the undersigned interposes no Objections for issuance of the corresponding Municipal Permit being applied for.
    </p>
</div>
@endsection