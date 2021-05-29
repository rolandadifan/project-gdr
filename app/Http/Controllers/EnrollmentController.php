<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\CourseInfo;
use App\Models\CoursePrice;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\UserFunding;
use App\Models\UserPassport;
use App\Models\UserResidance;
use App\Models\UserUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function index()
    {
        $step_one = Page::where('key', 'step-1')->first();
        $step_two = Page::where('key', 'step-2')->first();
        $step_three = Page::where('key', 'step-3')->first();
        $step_ones = json_decode($step_one->value);
        $step_twos = json_decode($step_two->value);
        $step_threes = json_decode($step_three->value);
        $scourses = Course::where('status_id', 1)->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'non')->orderBy('created_at', 'DESC');
        })->get();
        $user = User::with('userDetail')->findOrFail(auth()->user()->id);

        return view('pages.enrollment.index')->with([
            'step_ones' => $step_ones,
            'step_twos' => $step_twos,
            'step_threes' => $step_threes,
            'scourses' => $scourses,
            'user' => $user,
        ]);
    }

    public function phase1store(Request $request){
        session(['selected-scource' => $request->scourse ?? '']);
        return redirect()->route('enrollment.input');
    }

    public function input()
    {
        $course= Course::with('courseDetail')->select(['id', 'name'])->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree','!=', 'no')->orderBy('created_at', 'DESC');
        })->get();
        $user = User::with('userDetail')->findOrFail(auth()->user()->id);
        $enrollment = Enrollment::where('user_id', auth()->user()->id)->with(['user.userDetail.userFunding','user.userDetail.userDocument','user.userDetail.userResidance','user.userDetail.userPasport', 'course'])->orWhere('status_id', 3)->first();
        // dd($enrollment);
        return view('pages.enrollment.dagree.input')->with([
            'user' => $user,
            'course' => $course,
            'enrollment' => $enrollment,
            'scourse' => session('selected-scource'
        )]);
    }

    // public function phase2store(Request $request){
    //     // dd($request->all());
    //     return redirect()->route('enrollment.verifi');
    // }

    public function verifi()
    {
         $enrollment = Enrollment::where('user_id', auth()->user()->id)->with(['user.userDetail.userFunding','user.userDetail.userDocument','user.userDetail.userResidance','user.userDetail.userPasport', 'course'])->orWhere('status_id', 3)->first();
          $user = User::with('userDetail')->findOrFail(auth()->user()->id);
        return view('pages.enrollment.dagree.verifi')->with([
            'enrollment' => $enrollment,
            'user' => $user,
        ]);
    }

    public function edit()
    {
        $course= Course::with('courseDetail')->select(['id', 'name'])->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree','!=', 'no')->orderBy('created_at', 'DESC');
        })->get();
        $user = User::with('userDetail')->findOrFail(auth()->user()->id);
        $enrollment = Enrollment::where('user_id', auth()->user()->id)->with(['user.userDetail.userFunding','user.userDetail.userDocument','user.userDetail.userResidance','user.userDetail.userPasport', 'course'])->orWhere('status_id', 3)->first();
         return view('pages.enrollment.dagree.edit')->with([
            'user' => $user,
            'course' => $course,
            'enrollment' => $enrollment,
            'scourse' => session('selected-scource'
        )]);
    }

    public function storeAllData(Request $request)
    {
        $validateCurResidance = $request->validate([
            'address' => 'required|string',
            'current_city' => 'required|string|max:50',
            'current_prov' => 'required|string|max:50',
            'current_country' => 'required|string|max:50',
            'current_postcode' => 'required|string'
        ]);

        $user_residance = UserResidance::where('user_detail_id', auth()->user()->userDetail->id)->first();
        if(!$user_residance){
            UserResidance::create([
                'user_detail_id' => auth()->user()->userDetail->id,
                'address' => $validateCurResidance['address'],
                'current_city' => $validateCurResidance['current_city'],
                'current_prov' => $validateCurResidance['current_prov'],
                'current_country' => $validateCurResidance['current_country'],
                'current_postcode' => $validateCurResidance['current_postcode'],
                ]);
        }else{
            $user_residance->update([
                'address' => $validateCurResidance['address'],
                'current_city' => $validateCurResidance['current_city'],
                'current_prov' => $validateCurResidance['current_prov'],
                'current_country' => $validateCurResidance['current_country'],
                'current_postcode' => $validateCurResidance['current_postcode'],
            ]);
        }
            
            $validatePassport = $request->validate([
                'nomor' => 'required|string|max:50',
                'filling' => 'required',
                'expired' => 'required',
            ]);

        $user_passport = UserPassport::where('user_detail_id', auth()->user()->userDetail->id)->first();  
        if(!$user_passport){
            UserPassport::create([
                'user_detail_id' => auth()->user()->userDetail->id,
                'nomor' => $validatePassport['nomor'],
                'filling' => $validatePassport['filling'],
                'expired' => $validatePassport['expired'],
            ]);
        }else{
            $user_passport->update([
                'nomor' => $validatePassport['nomor'],
                'filling' => $validatePassport['filling'],
                'expired' => $validatePassport['expired'],
            ]);
        }

        
        $validateFunding = $request->validate([
            'type' => 'required|string',
            'provider' => 'required',
            'guarantor' => 'required',
            ]);
            
        $user_funding = UserFunding::where('user_detail_id', auth()->user()->userDetail->id)->first();
        if(!$user_funding){
            UserFunding::create([
                'user_detail_id' => auth()->user()->userDetail->id,
                'type' => $validateFunding['type'],
                'provider' => $validateFunding['provider'],
                'guarantor' => $validateFunding['guarantor'],
            ]);
        }else{
             $user_funding->update([
                 'type' => $validateFunding['type'],
                'provider' => $validateFunding['provider'],
                'guarantor' => $validateFunding['guarantor'],
             ]);
        }

        $validateEnrollment = $request->validate([
            'university' => 'required|string',
            'course_id' => 'required',
        ]);

        $validateDocument = $request->validate([
            'photo_passport' => 'required|mimes:pdf|max:300',
            'photo_formal' => 'required|mimes:pdf|max:300',
            'statment_letter' => 'required|mimes:pdf|max:300',
            'sponsor_letter' => 'required|mimes:pdf|max:300',
            'photo_cover_passport' => 'required|mimes:pdf|max:300',
            'sponsor_letter_sign_id' => 'required|mimes:pdf|max:300',
            'letter_accept' => 'required|mimes:pdf|max:300',
            'financial' => 'required|mimes:pdf|max:300',
            'medical' => 'required|mimes:pdf|max:300',
            'academic_transkip' => 'required|mimes:pdf|max:300',
            'last_certificate' => 'required|mimes:pdf|max:300',
        ]);

        // $validateDocument['photo_passport'] = $request->file('photo_passport')->store('document', 'public');
        // $validateDocument['photo_formal'] = $request->file('photo_formal')->store('document', 'public');
        // $validateDocument['statment_letter'] = $request->file('statment_letter')->store('document', 'public');
        // $validateDocument['sponsor_letter'] = $request->file('sponsor_letter')->store('document', 'public');
        // $validateDocument['photo_cover_passport'] = $request->file('photo_cover_passport')->store('document', 'public');
        // $validateDocument['sponsor_letter_sign_id'] = $request->file('sponsor_letter_sign_id')->store('document', 'public');
        // $validateDocument['letter_accept'] = $request->file('letter_accept')->store('document', 'public');
        // $validateDocument['financial'] = $request->file('financial')->store('document', 'public');
        // $validateDocument['medical'] = $request->file('medical')->store('document', 'public');
        // $validateDocument['academic_transkip'] = $request->file('academic_transkip')->store('document', 'public');
        // $validateDocument['last_certificate'] = $request->file('last_certificate')->store('document', 'public');

        $validateDocument['photo_passport']    = $request->file('photo_passport');
        $validateDocument['photo_formal']    = $request->file('photo_formal');
        $validateDocument['statment_letter']    = $request->file('statment_letter');
        $validateDocument['sponsor_letter']    = $request->file('sponsor_letter');
        $validateDocument['photo_cover_passport']    = $request->file('photo_cover_passport');
        $validateDocument['sponsor_letter_sign_id']    = $request->file('sponsor_letter_sign_id');
        $validateDocument['letter_accept']    = $request->file('letter_accept');
        $validateDocument['financial']    = $request->file('financial');
        $validateDocument['medical']    = $request->file('medical');
        $validateDocument['academic_transkip']    = $request->file('academic_transkip');
        $validateDocument['last_certificate']    = $request->file('last_certificate');

        $fileNamePassport = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['photo_passport'] ->getClientOriginalName();
        $fileNameForlmal = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['photo_formal'] ->getClientOriginalName();
        $fileNameStatement = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['statment_letter'] ->getClientOriginalName();
        $fileNameSponsor = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['sponsor_letter'] ->getClientOriginalName();
        $fileNameCover = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['photo_cover_passport'] ->getClientOriginalName();
        $fileNameSponsorLeter = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['sponsor_letter_sign_id'] ->getClientOriginalName();
        $fileNameAccept = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['letter_accept'] ->getClientOriginalName();
        $fileNameFinancial = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['financial'] ->getClientOriginalName();
        $fileNameMedical = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['medical'] ->getClientOriginalName();
        $fileNameTranscipt = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['academic_transkip'] ->getClientOriginalName();
        $fileNameCertificate = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['last_certificate'] ->getClientOriginalName();

        $validateDocument['photo_passport']->storeAs('document', $fileNamePassport, 'public');
        $validateDocument['photo_formal']->storeAs('document', $fileNameForlmal, 'public');
        $validateDocument['statment_letter']->storeAs('document', $fileNameStatement, 'public');
        $validateDocument['sponsor_letter']->storeAs('document', $fileNameSponsor, 'public');
        $validateDocument['photo_cover_passport']->storeAs('document', $fileNameCover, 'public');
        $validateDocument['sponsor_letter_sign_id']->storeAs('document', $fileNameSponsorLeter, 'public');
        $validateDocument['letter_accept']->storeAs('document', $fileNameAccept, 'public');
        $validateDocument['financial']->storeAs('document', $fileNameFinancial, 'public');
        $validateDocument['medical']->storeAs('document', $fileNameMedical, 'public');
        $validateDocument['academic_transkip']->storeAs('document', $fileNameTranscipt, 'public');
        $validateDocument['last_certificate']->storeAs('document', $fileNameCertificate, 'public');
        

        $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
        if(!$user_document){
            UserUpload::create([
                    'user_detail_id' => auth()->user()->userDetail->id,
                    'photo_passport' => 'document/' .$fileNamePassport,
                    'photo_formal' => 'document/' .$fileNameForlmal,
                    'statment_letter' => 'document/' .$fileNameStatement,
                    'photo_cover_passport' => 'document/' .$fileNameCover,
                    'sponsor_letter' => 'document/' .$fileNameSponsor,
                    'sponsor_letter_sign_id' => 'document/' .$fileNameSponsorLeter,
                    'letter_accept' => 'document/' .$fileNameAccept,
                    'financial' => 'document/' .$fileNameFinancial,
                    'medical' => 'document/' .$fileNameMedical,
                    'academic_transkip' => 'document/' .$fileNameTranscipt,
                    'last_certificate' => 'document/' .$fileNameCertificate,
                ]);
        }else{
            $user_document->update([
                'photo_passport' => $validateDocument['photo_passport'],
                'photo_formal' => $validateDocument['photo_formal'],
                'statment_letter' => $validateDocument['statment_letter'],
                'photo_cover_passport' => $validateDocument['photo_cover_passport'],
                'sponsor_letter' => $validateDocument['sponsor_letter'],
                'sponsor_letter_sign_id' => $validateDocument['sponsor_letter_sign_id'],
                'letter_accept' => $validateDocument['letter_accept'],
                'financial' => $validateDocument['financial'],
                'medical' => $validateDocument['medical'],
                'academic_transkip' => $validateDocument['academic_transkip'],
                'last_certificate' => $validateDocument['last_certificate'],
            ]);
        }
        

        $enrol = Enrollment::where('user_id', auth()->user()->id)->first();
        if(!$enrol){
            Enrollment::create([
                'user_id' => auth()->user()->id,
                'course_id' => $validateEnrollment['course_id'],
                'university' => $validateEnrollment['university'],
                'status_id' => 3
            ]);
        }else{
            $enrol->update([
                'course_id' => $validateEnrollment['course_id'],
                'university' => $validateEnrollment['university'],
            ]);
        }


        return redirect()->route('enrollment.verifi');
    }

    public function editAllData(Request $request)
    {
        if( $request->file('photo_passport') || $request->file('photo_formal') ||$request->file('statment_letter') ||$request->file('photo_cover_passport') ||$request->file('sponsor_letter') ||$request->file('sponsor_letter_sign_id') ||$request->file('letter_accept') ||$request->file('financial') ||$request->file('medical') ||!$request->file('academic_transkip') ||!$request->file('last_certificate') ){
            $validateCurResidance = $request->validate([
            'address' => 'required|string',
            'current_city' => 'required|string|max:50',
            'current_prov' => 'required|string|max:50',
            'current_country' => 'required|string|max:50',
            'current_postcode' => 'required|string'
        ]);

        $user_residance = UserResidance::where('user_detail_id', auth()->user()->userDetail->id)->first();
        {
            $user_residance->update([
                'address' => $validateCurResidance['address'],
                'current_city' => $validateCurResidance['current_city'],
                'current_prov' => $validateCurResidance['current_prov'],
                'current_country' => $validateCurResidance['current_country'],
                'current_postcode' => $validateCurResidance['current_postcode'],
            ]);
        }
            
            $validatePassport = $request->validate([
                'nomor' => 'required|string|max:50',
                'filling' => 'required',
                'expired' => 'required',
            ]);

        $user_passport = UserPassport::where('user_detail_id', auth()->user()->userDetail->id)->first();  
        {
            $user_passport->update([
                'nomor' => $validatePassport['nomor'],
                'filling' => $validatePassport['filling'],
                'expired' => $validatePassport['expired'],
            ]);
        }

        
        $validateFunding = $request->validate([
            'type' => 'required|string',
            'provider' => 'required',
            'guarantor' => 'required',
            ]);
            
        $user_funding = UserFunding::where('user_detail_id', auth()->user()->userDetail->id)->first();
       {
             $user_funding->update([
                 'type' => $validateFunding['type'],
                'provider' => $validateFunding['provider'],
                'guarantor' => $validateFunding['guarantor'],
             ]);
        }

        $validateEnrollment = $request->validate([
            'university' => 'required|string',
            'course_id' => 'required',
        ]);

        $validateDocument = $request->validate([
            'photo_passport' => 'mimes:pdf|max:300',
            'photo_formal' => 'mimes:pdf|max:300',
            'statment_letter' => 'mimes:pdf|max:300',
            'sponsor_letter' => 'mimes:pdf|max:300',
            'photo_cover_passport' => 'mimes:pdf|max:300',
            'sponsor_letter_sign_id' => 'mimes:pdf|max:300',
            'letter_accept' => 'mimes:pdf|max:300',
            'financial' => 'mimes:pdf|max:300',
            'medical' => 'mimes:pdf|max:300',
            'academic_transkip' => 'mimes:pdf|max:300',
            'last_certificate' => 'mimes:pdf|max:300',
        ]);

        
        $validateDocument['photo_passport']    = $request->file('photo_passport');
        $validateDocument['photo_formal']    = $request->file('photo_formal');
        $validateDocument['statment_letter']    = $request->file('statment_letter');
        $validateDocument['sponsor_letter']    = $request->file('sponsor_letter');
        $validateDocument['photo_cover_passport']    = $request->file('photo_cover_passport');
        $validateDocument['sponsor_letter_sign_id']    = $request->file('sponsor_letter_sign_id');
        $validateDocument['letter_accept']    = $request->file('letter_accept');
        $validateDocument['financial']    = $request->file('financial');
        $validateDocument['medical']    = $request->file('medical');
        $validateDocument['academic_transkip']    = $request->file('academic_transkip');
        $validateDocument['last_certificate']    = $request->file('last_certificate');

        if(isset($validateDocument['photo_passport'])){
            $fileNamePassport = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['photo_passport'] ->getClientOriginalName();
            $validateDocument['photo_passport']->storeAs('document', $fileNamePassport, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
                {
                    $user_document->update([
                        'photo_passport' => 'document/' .$fileNamePassport,
                    ]);
                }
        }
        if(isset($validateDocument['photo_formal'])){
             $fileNameForlmal = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['photo_formal'] ->getClientOriginalName();
             $validateDocument['photo_formal']->storeAs('document', $fileNameForlmal, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'photo_formal' => 'document/' .$fileNameForlmal,
                ]);
            }
        }
        if(isset($validateDocument['statment_letter'])){
             $fileNameStatement = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['statment_letter'] ->getClientOriginalName();
             $validateDocument['statment_letter']->storeAs('document', $fileNameStatement, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
                {
                $user_document->update([
                    'statment_letter' => 'document/' .$fileNameStatement,
                ]);
                }
        }
        if(isset($validateDocument['sponsor_letter'])){
            $fileNameSponsor = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['sponsor_letter'] ->getClientOriginalName();
             $validateDocument['sponsor_letter']->storeAs('document', $fileNameSponsor, 'public');
                    $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
                {
                    $user_document->update([
                        'sponsor_letter' => 'document/' .$fileNameSponsor,
                    ]);
                }
        }
        if(isset($validateDocument['photo_cover_passport'])){
           $fileNameCover = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['photo_cover_passport'] ->getClientOriginalName();
            $validateDocument['photo_cover_passport']->storeAs('document', $fileNameCover, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'photo_cover_passport' =>'document/' .$fileNameCover,
                ]);
            }
        }
        if(isset($validateDocument['sponsor_letter_sign_id'])){
            $fileNameSponsorLeter = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['sponsor_letter_sign_id'] ->getClientOriginalName();
            $validateDocument['sponsor_letter_sign_id']->storeAs('document', $fileNameSponsorLeter, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'sponsor_letter_sign_id' =>'document/' .$fileNameSponsorLeter,
                ]);
            }
        }
        if(isset($validateDocument['letter_accept'])){
            $fileNameAccept = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['letter_accept'] ->getClientOriginalName();
            $validateDocument['letter_accept']->storeAs('document', $fileNameAccept, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'letter_accept' => 'document/' .$fileNameAccept,
                ]);
            }
        }
        if(isset($validateDocument['financial'])){
            $fileNameFinancial = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['financial'] ->getClientOriginalName();
            $validateDocument['financial']->storeAs('document', $fileNameFinancial, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'financial' => 'document/' .$fileNameFinancial,
                ]);
            }
        }
        if(isset($validateDocument['medical'])){
            $fileNameMedical = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['medical'] ->getClientOriginalName();
            $validateDocument['medical']->storeAs('document', $fileNameMedical, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'medical' => 'document/' .$fileNameMedical,
                ]);
            }
        }
        if(isset($validateDocument['academic_transkip'])){
            $fileNameTranscipt = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['academic_transkip'] ->getClientOriginalName();
            $validateDocument['academic_transkip']->storeAs('document', $fileNameTranscipt, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'academic_transkip' => 'document/' .$fileNameTranscipt,
                ]);
            }
        }
        if(isset($validateDocument['last_certificate'])){
            $fileNameCertificate = date("Y-m-d"). '-'. rand(1, 999).'-' . $validateDocument['last_certificate'] ->getClientOriginalName();
            $validateDocument['last_certificate']->storeAs('document', $fileNameCertificate, 'public');
                $user_document = UserUpload::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_document->update([
                    'last_certificate' => 'document/' .$fileNameCertificate,
                ]);
            }
        }
        
        $enrol = Enrollment::where('user_id', auth()->user()->id)->first();
       {
            $enrol->update([
                'course_id' => $validateEnrollment['course_id'],
                'university' => $validateEnrollment['university'],
            ]);
        }
        }else if($request->file('photo_passport') == null || $request->file('photo_formal') == null ||$request->file('statment_letter') == null ||$request->file('photo_cover_passport') == null ||$request->file('sponsor_letter') == null ||$request->file('sponsor_letter_sign_id') == null ||$request->file('letter_accept') == null ||$request->file('financial') == null ||$request->file('medical') == null ||$request->file('academic_transkip') == null ||$request->file('last_certificate') == null){

                $validateCurResidance = $request->validate([
                'address' => 'required|string',
                'current_city' => 'required|string|max:50',
                'current_prov' => 'required|string|max:50',
                'current_country' => 'required|string|max:50',
                'current_postcode' => 'required|string'
            ]);

            $user_residance = UserResidance::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_residance->update([
                    'address' => $validateCurResidance['address'],
                    'current_city' => $validateCurResidance['current_city'],
                    'current_prov' => $validateCurResidance['current_prov'],
                    'current_country' => $validateCurResidance['current_country'],
                    'current_postcode' => $validateCurResidance['current_postcode'],
                ]);
            }
                
                $validatePassport = $request->validate([
                    'nomor' => 'required|string|max:50',
                    'filling' => 'required',
                    'expired' => 'required',
                ]);

            $user_passport = UserPassport::where('user_detail_id', auth()->user()->userDetail->id)->first();  
            {
                $user_passport->update([
                    'nomor' => $validatePassport['nomor'],
                    'filling' => $validatePassport['filling'],
                    'expired' => $validatePassport['expired'],
                ]);
            }

            
            $validateFunding = $request->validate([
                'type' => 'required|string',
                'provider' => 'required',
                'guarantor' => 'required',
                ]);
                
            $user_funding = UserFunding::where('user_detail_id', auth()->user()->userDetail->id)->first();
            {
                $user_funding->update([
                    'type' => $validateFunding['type'],
                    'provider' => $validateFunding['provider'],
                    'guarantor' => $validateFunding['guarantor'],
                ]);
            }

            $validateEnrollment = $request->validate([
                'university' => 'required|string',
                'course_id' => 'required',
            ]);
            $enrol = Enrollment::where('user_id', auth()->user()->id)->first();
            {
            $enrol->update([
                'course_id' => $validateEnrollment['course_id'],
                'university' => $validateEnrollment['university'],
            ]);
            }

        
     }


        return redirect()->route('enrollment.verifi');
    }
}
