@extends('layouts.app-2')
@section('content')
@section('breadcrumb-title', 'Student Enrollment')
@section('title-jumbotron', 'Student Enrollment')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel
quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit,
tenetur!')
@include('icon')
<section id="startNewApp">
    <form action="{{ route('enrollment.storeAllData') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <h5>Start New Application</h5>

            <!-- wizard-progress -->
            <div class="wizard__progress mb-3">
                <div class="container">
                    <div class="row justify-content-center progress__step-2">
                        <div class="col active">
                            <h6>Applications</h6>
                            <p>Select Type</p>
                        </div>
                        <div class="col active">
                            <h6>Personal Details</h6>
                            <p>Fill the Form</p>
                        </div>
                        <div class="col">
                            <h6>Verification</h6>
                            <p>Review and Submit</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- tabs form and document -->
            <h5>Input Form and Documents Degree Program</h5>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="form-tab" data-bs-toggle="tab" data-bs-target="#form"
                        type="button" role="tab" aria-controls="form" aria-selected="true">FORM</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#document"
                        type="button" role="tab" aria-controls="document" aria-selected="false">DOCUMENT</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">

                    <div class="container-fluid">
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="form__identity">
                                    <h4>Identity</h4>
                                    <div class="mb-3">
                                        <label for="idName" class="form-label">Name<span>*</span></label>
                                        <input type="text" class="form-control" id="idName" name="idName"
                                            value="{{ $user->name }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idPlaceBorn" class="form-label">Place of birth<span>*</span></label>
                                        <input type="text" class="form-control" id="idPlaceBorn" name="idPlaceBorn"
                                            value="{{ $user->userDetail->place_birth }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idDateBorn" class="form-label">Date of birth<span>*</span></label>
                                        <input type="date" class="form-control" id="idDateBorn" name="idDateBorn"
                                            value="{{ $user->userDetail->date_birth }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idGender" class="form-label">Gender<span>*</span></label>
                                        <input type="text" class="form-control" id="idGender" name="idGender"
                                            value="{{ $user->userDetail->gender == "F" ? "Women" : "Men" }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idNationality" class="form-label">Nationality<span>*</span></label>
                                        <input type="text" class="form-control" id="idNationality" name="idNationality"
                                            value="{{ $user->userDetail->nationality }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idEmail" class="form-label">Email<span>*</span></label>
                                        <input type="email" class="form-control" id="idEmail" name="idEmail"
                                            value="{{ $user->email }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idTelephone" class="form-label">No.
                                            Telephone<span>*</span></label>
                                        <input type="text" class="form-control" id="idTelephone" name="idTelephone"
                                            value="{{ $user->telephone }}" readonly>
                                    </div>
                                </div>

                                <div class="form__study--information">
                                    <h4>Study Information</h4>
                                    <div class="mb-3">
                                        <label for="studyUniversity" class="form-label">University<span>*</span></label>
                                        <input type="text" class="form-control" id="idTelephone" value="{{ $enrollment->university }}" name="university"
                                            value="" required>
                                        {{-- <select class="form-select" name="studyUniversity" id="studyUniversity" required
                                            placeholder="Select University">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="studyLevel" class="form-label">Program / Study
                                            Level<span>*</span></label>
                                            @if(isset($scourse))
                                                <select class="form-select" name="course_id" id="studyLevel" required
                                                placeholder="Select Program / Study Level" readonly>
                                                    <option value="{{ $scourse->id }}">{{ $scourse->name }}</option>
                                                </select>
                                            @elseif (!$course)
                                                <select class="form-select" name="studyLevel" id="studyLevel" required
                                                placeholder="Select Program / Study Level" disabled>
                                                    <option value="-">No Course Available</option>
                                                </select>
                                            @else
                                                <select class="form-select" name="course_id" id="studyLevel" required
                                                    placeholder="Select Program / Study Level">
                                                    <option value="{{ $enrollment->course->id }}">{{ $enrollment->course->name }}</option>
                                                    @forelse ($course as $cs)
                                                    <option value="{{ $cs->id }}">{{ $cs->name }}</option>
                                                    @empty
                                                    <option value="-">No Course Available</option>
                                                    @endforelse
                                                </select>
                                            @endif
                                            {{-- @php
                                                dd($scourse)
                                            @endphp --}}
                                    </div>
                                </div>

                                {{-- <div class="form__study--permitPeriod">
                                    <h4>Submission of Study Permit Period</h4>
                                    <div class="mb-3">
                                        <label for="studyStartLearning" class="form-label">Start
                                            Learning<span>*</span></label>
                                        <input type="number" min="0" class="form-control" id="studyStartLearning"
                                            name="studyStartLearning" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="studyLength" class="form-label">Length of Study
                                            Permit<span>*</span></label>
                                        <input type="text" class="form-control" id="studyLength" name="studyLength"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row row-cols-md-2 row-cols-1">
                                            <div class="col">
                                                <label for="studyFormDate" class="form-label">Permit start
                                                    date<span>*</span></label>
                                                <input type="date" class="form-control" aria-label="First name"
                                                    id="studyFormDate" name="studyFormDate" required>
                                            </div>
                                            <div class="col">
                                                <label for="studyToDate" class="form-label">Permit end
                                                    date<span>*</span></label>
                                                <input type="date" class="form-control" id="studyToDate"
                                                    name="studyToDate" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form__funding">
                                    <h4>Funding</h4>
                                    <div class="mb-3">
                                        <label for="funding" class="form-label">Funding Type<span>*</span></label>
                                        <select class="form-select" id="funding" name="type" required
                                            placeholder="Select Funding Type">
                                            <option value="{{ $enrollment->user->userDetail->userFunding->type ?? '-' }}">{{ $enrollment->user->userDetail->userFunding->type ?? '-' }}</option>
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fundingScholarshipProvided" class="form-label">Scholarship
                                            Provided<span>*</span></label>
                                        <input type="text" class="form-control" id="fundingScholarshipProvided"
                                            name="provider" value="{{ $enrollment->user->userDetail->userFunding->provider ?? '' }}" required>
                                        <div id="scholarshipHelp" class="form-text">For example: Parents, Government,
                                            Campus, etc.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fundingPositionGuarantor" class="form-label">Position
                                            Guarantor<span>*</span></label>
                                        <input type="text" class="form-control" id="fundingPositionGuarantor"
                                            name="guarantor" value="{{ $enrollment->user->userDetail->userFunding->guarantor ?? '' }}" required>
                                        <div id="scholarshipHelp" class="form-text">For example: Chancellor, Director,
                                            Head of Study Program.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form__residence">
                                    <h4>Residence</h4>
                                    <div class="mb-3">
                                        <label for="residenceAddress" class="form-label">Home
                                            address<span>*</span></label>
                                        <textarea type="text" class="form-control" id="residenceAddress"
                                            name="residenceAddress" readonly>{{ $user->userDetail->address }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="residenceCity" class="form-label">City<span>*</span></label>
                                        <input type="text" class="form-control" id="residenceCity" value="{{ $user->userDetail->city }}" readonly name="residenceCity"
                                            >
                                    </div>
                                    <div class="mb-3">
                                        <label for="residenceProvince" class="form-label">Province /
                                            State<span>*</span></label>
                                        <input type="text" class="form-control" id="residenceProvince"
                                            name="residenceProvince" value="{{$user->userDetail->province }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="residenceCountry" class="form-label">Country<span>*</span></label>
                                        <input type="text" class="form-control" id="residenceProvince"
                                            name="residenceProvince" value="{{ $user->userDetail->country }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="residencePostCode" class="form-label">Post
                                            Code<span>*</span></label>
                                        <input type="text" class="form-control" id="residencePostCode"
                                            name="residencePostCode" value="{{ $user->userDetail->post_code }}" readonly>
                                    </div>
                                </div>

                                <div class="form__placeResidenceIndonesia">
                                    <h4>Place of Residence in Indonesia</h4>
                                    <div class="mb-3">
                                        <label for="currAddress" class="form-label">Current
                                            Address<span>*</span></label>
                                        <input type="text" class="form-control" id="currAddress" value="{{ $enrollment->user->userDetail->userResidance->address ?? '' }}" name="address"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currCity" class="form-label">City<span>*</span></label>
                                        <input type="text" class="form-control" id="currCity" name="current_city" value="{{ $enrollment->user->userDetail->userResidance->current_city ?? '' }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currProvince" class="form-label">Province /
                                            State<span>*</span></label>
                                        <input type="text" class="form-control" id="currProvince" value="{{ $enrollment->user->userDetail->userResidance->current_prov ?? '' }}" name="current_prov"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currCountry" class="form-label">Country<span>*</span></label>
                                        <input type="text" class="form-control" id="currPostCode" value="{{ $enrollment->user->userDetail->userResidance->current_country ?? '' }}" name="current_country"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currPostCode" class="form-label">Post
                                            Code<span>*</span></label>
                                        <input type="text" class="form-control" id="currPostCode" value="{{ $enrollment->user->userDetail->userResidance->current_postcode ?? '' }}" name="current_postcode"
                                            required>
                                    </div>
                                </div>

                                <div class="form__passport">
                                    <h4>Passport</h4>
                                    <div class="mb-3">
                                        <label for="passportNo" class="form-label">No. Passport<span>*</span></label>
                                        <input type="text" class="form-control" id="passportNo" value="{{ $enrollment->user->userDetail->userPasport->nomor ?? '' }}" name="nomor"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row row-cols-md-2 row-cols-1">
                                            <div class="col">
                                                <label for="passportDateOfFilling" class="form-label">Date of
                                                    filling<span>*</span></label>
                                                <input type="date" class="form-control" aria-label="First name"
                                                    id="passportDateOfFilling" value="{{ $enrollment->user->userDetail->userPasport->filling ?? '' }}" name="filling" required>
                                            </div>
                                            <div class="col">
                                                <label for="passportExpDate" class="form-label">Expiration
                                                    Date<span>*</span></label>
                                                <input type="date" class="form-control" id="passportExpDate"
                                                    name="expired" value="{{ $enrollment->user->userDetail->userPasport->expired ?? '' }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h4>Supporting Documents</h4>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Formal Photo<span>*</span></label>
                                    <input  name="photo_formal" class="form-control" type="file" id="formFile"
                                        accept=".pdf" value="{{ $enrollment->user->userDetail->userDocument->photo_formal ?? '' }}">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Passport<span>*</span></label>
                                    <input  name="photo_passport" class="form-control" type="file" id="formFile" value="{{ $enrollment->user->userDetail->userDocument->photo_passport ?? '' }}"  accept=".pdf" >
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                    {{-- <a href="{{ Storage::url($enrollment->user->userDetail->userDocument->photo_passport) ?? '' }}">test download</a> --}}
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Passport Cover<span>*</span></label>
                                    <input  name="photo_cover_passport" class="form-control" type="file" id="formFile"  accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Statement Letter<span>*</span></label>
                                    <input  name="statment_letter" class="form-control" type="file" id="formFile"  accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Sponsor Letter<span>*</span></label>
                                    <input  name="sponsor_letter" class="form-control" type="file" id="formFile"  accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Sponsor Letter which has been signed<span>*</span></label>
                                    <input  name="sponsor_letter_sign_id" class="form-control" type="file" id="formFile"  accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Letter of Acceptance<span>*</span></label>
                                    <input  name="letter_accept" class="form-control" type="file" id="formFile" accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Financial Statement<span>*</span></label>
                                    <input  name="financial" class="form-control" type="file" id="formFile" accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Medical Statement<span>*</span></label>
                                    <input  name="medical" class="form-control" type="file" id="formFile" accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Copy of Academic Transacript<span>*</span></label>
                                    <input  name="academic_transkip" class="form-control" type="file" id="formFile" accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Last Certificate/Diploma<span>*</span></label>
                                    <input  name="last_certificate" class="form-control" type="file" id="formFile" accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="disclaimer__content">
                        <h5>Disclaimer :</h5>
                        <!-- <ul class="disclaimer__lists">
                <li>
                  All documents are to be scanned and are in color document format (not Black and White).
                </li>
                <li>
                  These documents needs to be sent to staff of international office of Universities Gunadarma through email:<a href="#">intloffoce.ud@gmail.com</a> with <span>maximum of 2 months prior the departure</span> of the students to Universities Gunadarma
                </li>
              </ul> -->
                        <div class="disclaimer__lists">
                            <div class="disclaimer__list--one">
                                <i class="bi bi-record-fill"></i>
                                <p>
                                    All documents are to be scanned and are in color document format (not Black and
                                    White).
                                </p>
                            </div>
                            <div class="disclaimer__list--two">
                                <i class="bi bi-record-fill"></i>
                                <p>
                                    These documents needs to be sent to staff of international office of Universities
                                    Gunadarma through email:<a href="#">intloffoce.ud@gmail.com</a> with <span>maximum
                                        of 2
                                        months prior the departure</span> of the students to Universities Gunadarma
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="confirm__button mt-2">
                <p>Please click "Next" after selecting the application type</p>
                <a href="{{ route('enrollment.index') }}" class="btn secondary__button mx-auto" id="backStep1">Previous</a>
                <input type="submit" class="btn primary__button mx-auto" value="Save and next">
            </div>
    </form>
</section>

@endsection
@push('a

ddon-script')
@endpush