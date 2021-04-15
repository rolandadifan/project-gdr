@extends('layouts.app-2')
@section('content')
@include('include.jumbotron')
@include('icon')
    <section id="startNewApp">
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
                <h6>Applications</h6>
                <p>Select Type</p>
              </div>
              <div class="col">
                <h6>Applications</h6>
                <p>Select Type</p>
              </div>
            </div>
          </div>
        </div>

        <!-- tabs form and document -->
        <h5>Input Form and Documents Degree Program</h5>
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
                        <label for="name" class="form-label">Name<span>*</span></label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                      <div class="mb-3">
                        <label for="placeBorn" class="form-label">Place of birth<span>*</span></label>
                        <input type="text" class="form-control" id="placeBorn" name="placeBorn">
                      </div>
                      <div class="mb-3">
                        <label for="dateBorn" class="form-label">Date of birth<span>*</span></label>
                        <input type="date" class="form-control" id="dateBorn" name="dateBorn">
                      </div>
                      <div class="mb-3">
                        <label for="gender" class="form-label">Gender<span>*</span></label>
                        <select class="form-select" id="gender">
                          <option selected>Select Gender</option>
                          <option value="men">Men</option>
                          <option value="women">Women</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="nationality" class="form-label">Nationality<span>*</span></label>
                        <select class="form-select" id="nationality">
                          <option selected>Select Nationality</option>
                          <option value="1">-</option>
                          <option value="2">-</option>
                        </select>
                      </div>
                    </div>

                    <div class="form__study--information">
                      <h4>Study Information</h4>
                      <div class="mb-3">
                        <label for="university" class="form-label">University<span>*</span></label>
                        <select class="form-select" id="university">
                          <option selected>Select University/option>
                          <option value="-">-</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="studyLevel" class="form-label">Program / Study Level<span>*</span></label>
                        <select class="form-select" id="studyLevel">
                          <option selected>Select Program / Study Level</option>
                          <option value="-">-</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                    </div>

                    <div class="form__study--permitPeriod">
                      <h4>Submission of Study Permit Period</h4>
                      <div class="mb-3">
                        <label for="startLearning" class="form-label">Start Learning<span>*</span></label>
                        <input type="date" class="form-control" id="startLearning" name="startLearning">
                      </div>
                      <div class="mb-3">
                        <label for="lengthStudy" class="form-label">Length of Study Permit<span>*</span></label>
                        <input type="text" class="form-control" id="lengthStudy" name="lengthStudy">
                      </div>
                      <div class="mb-3">
                        <div class="row row-cols-md-2 row-cols-1">
                          <div class="col">
                            <label for="formDate" class="form-label">From<span>*</span></label>
                            <input type="date" class="form-control" placeholder="First name" aria-label="First name" id="formDate" name="formDate">
                          </div>
                          <div class="col">
                            <label for="toDate" class="form-label">To<span>*</span></label>
                            <input type="date" class="form-control" id="toDate" name="toDate">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form__funding">
                      <h4>Funding</h4>
                      <div class="mb-3">
                        <label for="funding" class="form-label">Funding Type<span>*</span></label>
                        <select class="form-select" id="funding">
                          <option selected>Select Funding Type</option>
                          <option value="-">-</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="scholarshipProvided" class="form-label">Scholarship Provided<span>*</span></label>
                        <input type="text" class="form-control" id="scholarshipProvided" name="scholarshipProvided">
                        <div id="scholarshipHelp" class="form-text">For example: Parents, Government, Campus, etc.</div>
                      </div>
                      <div class="mb-3">
                        <label for="positionGuarantor" class="form-label">Position Guarantor<span>*</span></label>
                        <input type="text" class="form-control" id="positionGuarantor" name="positionGuarantor">
                        <div id="scholarshipHelp" class="form-text">For example: Chancellor, Director, Head of Study Program.</div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form__residence">
                      <h4>Residence</h4>
                      <div class="mb-3">
                        <label for="homeAddress" class="form-label">Home address<span>*</span></label>
                        <input type="text" class="form-control" id="homeAddress" name="homeAddress">
                      </div>
                      <div class="mb-3">
                        <label for="city" class="form-label">City<span>*</span></label>
                        <input type="text" class="form-control" id="city" name="city">
                      </div>
                      <div class="mb-3">
                        <label for="province" class="form-label">Province / State<span>*</span></label>
                        <input type="text" class="form-control" id="province" name="province">
                      </div>
                      <div class="mb-3">
                        <label for="country" class="form-label">Country<span>*</span></label>
                        <select class="form-select" id="country">
                          <option selected>Select Country</option>
                          <option value="-">-</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="postCode" class="form-label">Post Code<span>*</span></label>
                        <input type="text" class="form-control" id="postCode" name="postCode">
                      </div>
                    </div>

                    <div class="form__placeResidenceIndonesia">
                      <h4>Place of Residence in Indonesia</h4>
                      <div class="mb-3">
                        <label for="currAddress" class="form-label">Current Address<span>*</span></label>
                        <input type="text" class="form-control" id="currAddress" name="currAddress">
                      </div>
                      <div class="mb-3">
                        <label for="cityIndonesia" class="form-label">City<span>*</span></label>
                        <input type="text" class="form-control" id="cityIndonesia" name="cityIndonesia">
                      </div>
                      <div class="mb-3">
                        <label for="provinceIndonesia" class="form-label">Province / State<span>*</span></label>
                        <input type="text" class="form-control" id="provinceIndonesia" name="provinceIndonesia">
                      </div>
                      <div class="mb-3">
                        <label for="countryIndonesia" class="form-label">Country<span>*</span></label>
                        <select class="form-select" id="countryIndonesia">
                          <option selected>Select Country</option>
                          <option value="-">-</option>
                          <option value="-">-</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="postCodeIndonesia" class="form-label">Post Code<span>*</span></label>
                        <input type="text" class="form-control" id="postCodeIndonesia" name="postCodeIndonesia">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email<span>*</span></label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="numberTelephone" class="form-label">No. Telephone<span>*</span></label>
                        <input type="text" class="form-control" id="numberTelephone" name="numberTelephone">
                      </div>
                    </div>

                    <div class="form__passport">
                      <h4>Passport</h4>
                      <div class="mb-3">
                        <label for="noPassport" class="form-label">No. Passport<span>*</span></label>
                        <input type="text" class="form-control" id="noPassport" name="noPassport">
                      </div>
                      <div class="mb-3">
                        <div class="row row-cols-md-2 row-cols-1">
                          <div class="col">
                            <label for="dateOfFilling" class="form-label">Date of filling<span>*</span></label>
                            <input type="date" class="form-control" placeholder="First name" aria-label="First name" id="dateOfFilling" name="dateOfFilling">
                          </div>
                          <div class="col">
                            <label for="expDate" class="form-label">Expiration Date<span>*</span></label>
                            <input type="date" class="form-control" id="expDate" name="expDate">
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
                <div class="col-md-6 col-12">
                  <h4>Supporting Documents</h4>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1">
                  <div class="col">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile" accept=".pdf">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
                      <div id="fileHelp" class="form-text">Type file:PDF Max file 300kb</div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example<span>*</span></label>
                      <input class="form-control" type="file" id="formFile">
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
                    All documents are to be scanned and are in color document format (not Black and White).
                  </p>
                </div>
                <div class="disclaimer__list--two">
                    <i class="bi bi-record-fill"></i>
                  <p>
                    These documents needs to be sent to staff of international office of Universities Gunadarma through email:<a href="#">intloffoce.ud@gmail.com</a> with <span>maximum of 2 months prior the departure</span> of the students to Universities Gunadarma
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="confirm__button mt-2">
          <p>Please click "Next" after selecting the application type</p>
          <button class="btn secondary__button mx-auto" id="backStep1">Previous</button>
          <button class="btn primary__button mx-auto" id="nextStep3">
            <a href="{{ route('enrollment.verifi') }}">Next</a>
          </button>
        </div>
    </section>

@endsection
@push('addon-script')
@endpush
