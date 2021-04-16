<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Resident;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function resident(Resident $resident)
    {

        if(request()->certificate_type === 'clearance') {
            $clearance_purpose = request()->clearance_purpose;
            return view('certificates.brgy_clearance', compact('resident', 'clearance_purpose'));
        }

        if (request()->certificate_type === 'residency') {
            $clearance_purpose = request()->clearance_purpose;
            return view('certificates.brgy_cert_of_residency', compact('resident', 'clearance_purpose'));
        }

    }

    public function business(Business $business)
    {

        if (request()->certificate_type === 'permit') {
            $clearance_purpose = request()->clearance_purpose;
            return view('certificates.brgy_business_permit', compact('resident', 'clearance_purpose'));
        }
    }
}
