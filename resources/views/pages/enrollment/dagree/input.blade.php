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
    <form action="{{ route('enrollment.phase2store') }}" method="POST">
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
                                        <select class="form-select" name="studyUniversity" id="studyUniversity" required
                                            placeholder="Select University">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="studyLevel" class="form-label">Program / Study
                                            Level<span>*</span></label>
                                        <select class="form-select" name="studyLevel" id="studyLevel" required
                                            placeholder="Select Program / Study Level">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form__study--permitPeriod">
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
                                </div>

                                <div class="form__funding">
                                    <h4>Funding</h4>
                                    <div class="mb-3">
                                        <label for="funding" class="form-label">Funding Type<span>*</span></label>
                                        <select class="form-select" id="funding" name="funding" required
                                            placeholder="Select Funding Type">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fundingScholarshipProvided" class="form-label">Scholarship
                                            Provided<span>*</span></label>
                                        <input type="text" class="form-control" id="fundingScholarshipProvided"
                                            name="fundingScholarshipProvided" required>
                                        <div id="scholarshipHelp" class="form-text">For example: Parents, Government,
                                            Campus, etc.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fundingPositionGuarantor" class="form-label">Position
                                            Guarantor<span>*</span></label>
                                        <input type="text" class="form-control" id="fundingPositionGuarantor"
                                            name="fundingPositionGuarantor" required>
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
                                        <input type="text" class="form-control" id="residenceCity" name="residenceCity"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="residenceProvince" class="form-label">Province /
                                            State<span>*</span></label>
                                        <input type="text" class="form-control" id="residenceProvince"
                                            name="residenceProvince" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="residenceCountry" class="form-label">Country<span>*</span></label>
                                        <select class="form-select" id="residenceCountry" name="residenceCountry"
                                            required placeholder="Select Country">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="residencePostCode" class="form-label">Post
                                            Code<span>*</span></label>
                                        <input type="text" class="form-control" id="residencePostCode"
                                            name="residencePostCode" required>
                                    </div>
                                </div>

                                <div class="form__placeResidenceIndonesia">
                                    <h4>Place of Residence in Indonesia</h4>
                                    <div class="mb-3">
                                        <label for="currAddress" class="form-label">Current
                                            Address<span>*</span></label>
                                        <input type="text" class="form-control" id="currAddress" name="currAddress"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currCity" class="form-label">City<span>*</span></label>
                                        <input type="text" class="form-control" id="currCity" name="currCity" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currProvince" class="form-label">Province /
                                            State<span>*</span></label>
                                        <input type="text" class="form-control" id="currProvince" name="currProvince"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currCountry" class="form-label">Country<span>*</span></label>
                                        <select class="form-select" name="currCountry" id="currCountry" required
                                            placeholder="Select Country">
                                            <option value="-">-</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="currPostCode" class="form-label">Post
                                            Code<span>*</span></label>
                                        <input type="text" class="form-control" id="currPostCode" name="currPostCode"
                                            required>
                                    </div>
                                </div>

                                <div class="form__passport">
                                    <h4>Passport</h4>
                                    <div class="mb-3">
                                        <label for="passportNo" class="form-label">No. Passport<span>*</span></label>
                                        <input type="text" class="form-control" id="passportNo" name="passportNo"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row row-cols-md-2 row-cols-1">
                                            <div class="col">
                                                <label for="passportDateOfFilling" class="form-label">Date of
                                                    filling<span>*</span></label>
                                                <input type="date" class="form-control" aria-label="First name"
                                                    id="passportDateOfFilling" name="passportDateOfFilling" required>
                                            </div>
                                            <div class="col">
                                                <label for="passportExpDate" class="form-label">Expiration
                                                    Date<span>*</span></label>
                                                <input type="date" class="form-control" id="passportExpDate"
                                                    name="passportExpDate" required>
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
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file1" class="form-control" type="file" id="formFile"
                                        accept=".pdf">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file2" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file3" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file4" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file5" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file6" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file7" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file8" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file9" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file10" class="form-control" type="file" id="formFile">
                                    <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input
                                        example<span>*</span></label>
                                    <input required name="file11" class="form-control" type="file" id="formFile">
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
                <button class="btn secondary__button mx-auto" id="backStep1">Previous</button>
                <input type="submit" class="btn primary__button mx-auto" value="Save and next">
            </div>
    </form>
</section>

@endsection
@push('a

ddon-script')
@endpush