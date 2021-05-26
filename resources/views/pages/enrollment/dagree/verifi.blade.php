@extends('layouts.app-2')
@section('content')
@section('breadcrumb-title', 'Student Enrollment')
@section('title-jumbotron', 'Student Enrollment')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
    <!-- content pemilihan program degree or non degree -->
    <section id="startNewApp">
      <div class="container">
        <h5>Start New Application</h5>

        <!-- wizard-progress -->
        <div class="wizard__progress mb-3"> 
          <div class="container">
            <div class="row justify-content-center progress__step-3">
              <div class="col active">
                <h6>Applications</h6>
                <p>Select Type</p>
              </div>
              <div class="col active">
                <h6>Personal Details</h6>
                <p>Fill the Form</p>
              </div>
              <div class="col active">
                <h6>Verification</h6>
                <p>Review and Submit</p>
              </div>
            </div>
          </div>
        </div>

        <!-- tabs form and document -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="form-tab" data-bs-toggle="tab" data-bs-target="#form" type="button" role="tab" aria-controls="form" aria-selected="true">FORM</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#document" type="button" role="tab" aria-controls="document" aria-selected="false">DOCUMENT</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
            <form>
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
                        <label for="university" class="form-label">University<span>*</span></label>
                        <input type="text" class="form-control" id="idTelephone" value="{{ $enrollment->university }}" name="university"
                                            value="" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="studyLevel" class="form-label">Program / Study Level<span>*</span></label>
                        <input type="text" class="form-control" id="idTelephone" value="{{ $enrollment->course->name }}" name="university"
                                            value="" disabled>
                      </div>
                    </div>

                    {{-- <div class="form__study--permitPeriod">
                      <h4>Submission of Study Permit Period</h4>
                      <div class="mb-3">
                        <label for="startLearning" class="form-label">Start Learning<span>*</span></label>
                        <input disabled type="date" class="form-control" id="startLearning" name="startLearning">
                      </div>
                      <div class="mb-3">
                        <label for="lengthStudy" class="form-label">Length of Study Permit<span>*</span></label>
                        <input disabled type="text" class="form-control" id="lengthStudy" name="lengthStudy">
                      </div>
                      <div class="mb-3">
                        <div class="row row-cols-md-2 row-cols-1">
                          <div class="col">
                            <label for="formDate" class="form-label">From<span>*</span></label>
                            <input disabled type="date" class="form-control" placeholder="First name" aria-label="First name" id="formDate" name="formDate">
                          </div>
                          <div class="col">
                            <label for="toDate" class="form-label">To<span>*</span></label>
                            <input disabled type="date" class="form-control" id="toDate" name="toDate">
                          </div>
                        </div>
                      </div>
                    </div> --}}

                    <div class="form__funding">
                      <h4>Funding</h4>
                      <div class="mb-3">
                        <label for="funding" class="form-label">Funding Type<span>*</span></label>
                         <input type="text" class="form-control" id="fundingScholarshipProvided"
                                            name="provider" value="{{ $enrollment->user->userDetail->userFunding->type ?? '' }}" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="scholarshipProvided" class="form-label">Scholarship Provided<span>*</span></label>
                         <input type="text" class="form-control" id="fundingScholarshipProvided"
                                            name="provider" value="{{ $enrollment->user->userDetail->userFunding->provider ?? '' }}" disabled>
                        <div id="scholarshipHelp" class="form-text">For example: Parents, Government, Campus, etc.</div>
                      </div>
                      <div class="mb-3">
                        <label for="positionGuarantor" class="form-label">Position Guarantor<span>*</span></label>
                         <input type="text" class="form-control" id="fundingScholarshipProvided"
                                            name="provider" value="{{ $enrollment->user->userDetail->userFunding->guarantor ?? '' }}" disabled>
                        <div id="scholarshipHelp" class="form-text">For example: Chancellor, Director, Head of Study Program.</div>
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
                        <label for="currAddress" class="form-label">Current Address<span>*</span></label>
                         <input type="text" class="form-control" id="currAddress" value="{{ $enrollment->user->userDetail->userResidance->address ?? '' }}" name="address"
                                            disabled>
                      </div>
                      <div class="mb-3">
                        <label for="cityIndonesia" class="form-label">City<span>*</span></label>
                         <input type="text" class="form-control" id="currCity" name="current_city" value="{{ $enrollment->user->userDetail->userResidance->current_city ?? '' }}" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="provinceIndonesia" class="form-label">Province / State<span>*</span></label>
                        <input type="text" class="form-control" id="currProvince" value="{{ $enrollment->user->userDetail->userResidance->current_prov ?? '' }}" name="current_prov"
                                            disabled>
                      </div>
                      <div class="mb-3">
                        <label for="countryIndonesia" class="form-label">Country<span>*</span></label>
                       <input type="text" class="form-control" id="currPostCode" value="{{ $enrollment->user->userDetail->userResidance->current_country ?? '' }}" name="current_country"
                                            disabled>
                      </div>
                      <div class="mb-3">
                        <label for="postCodeIndonesia" class="form-label">Post Code<span>*</span></label>
                         <input type="text" class="form-control" id="currPostCode" value="{{ $enrollment->user->userDetail->userResidance->current_postcode ?? '' }}" name="current_postcode"
                                            disabled>
                      </div>
                    </div>

                    <div class="form__passport">
                      <h4>Passport</h4>
                      <div class="mb-3">
                        <label for="noPassport" class="form-label">No. Passport<span>*</span></label>
                        <input type="text" class="form-control" id="passportNo" value="{{ $enrollment->user->userDetail->userPasport->nomor ?? '' }}" name="nomor"
                                            disabled>
                      </div>
                      <div class="mb-3">
                        <div class="row row-cols-md-2 row-cols-1">
                          <div class="col">
                            <label for="dateOfFilling" class="form-label">Date of filling<span>*</span></label>
                            <input type="date" class="form-control" aria-label="First name"
                                                    id="passportDateOfFilling" value="{{ $enrollment->user->userDetail->userPasport->filling ?? '' }}" name="filling" disabled>
                          </div>
                          <div class="col">
                            <label for="expDate" class="form-label">Expiration Date<span>*</span></label>
                            <input type="date" class="form-control" id="passportExpDate"
                                                    name="expired" value="{{ $enrollment->user->userDetail->userPasport->expired ?? '' }}" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn__save">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
            <form>
              <div class="row">
                <div class="col-6">
                  <h4>Supporting Documents</h4>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1">
                  <div class="col">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile" accept=".pdf">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input disabled example<span>*</span></label>
                      <input disabled class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn__save">Save</button>
                  </div>
                </div>
              </div>
            </form>

            <div class="disclaimer__content">
              <h5>Disclaimer :</h5>
              <ul class="disclaimer__lists">
                <li>All documents are to be scanned and are in color document format (not Black and White).</li>
                <li>These documents needs to be sent to staff of international office of Universities Gunadarma through email:<a href="#">intloffoce.ud@gmail.com</a> with <span>maximum of 2 months prior the departure</span> of the students to Universities Gunadarma
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="confirm__button mt-2">
          <p>Please click "SUBMIT" after all data is correct.</p>
          <button class="btn secondary__button" id="backStep1">Previous</button>
          <button class="btn primary__button" id="nextStep3">SUBMIT</button>
        </div>
    </section> 

@endsection
@push('addon-script')
@endpush
