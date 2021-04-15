<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function show(Resident $resident)
    {
        $clearance_purpose = request()->clearance_purpose;
        return view('certificates.brgy_business_permit', compact('resident', 'clearance_purpose'));
    }
}
