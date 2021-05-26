<section id="Indentity" class="mt-5">
            <h4>Identity</h4>
            <div class="card pl-3 pr-3 pt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" value="{{ $enrollment->user->name }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Place Of Birth</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->place_birth }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Date Of Birth</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->date_birth }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->gender == 'M' ? 'Male' : 'Female' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" value="{{ $enrollment->user->email }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input class="form-control" value="{{ $enrollment->user->telephone }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nationality</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->nationality }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Province</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->province }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->country }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Post Code</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->post_code }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">City</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->city }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Addres</label>
                            <textarea class="form-control" disabled>{{ $enrollment->user->userDetail->address }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="current_address" class="mt-5">
            <h4>Current Residance</h4>
            <div class="card pl-3 pr-3 pt-3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">City</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userResidance->current_city }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Province</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userResidance->current_prov }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userResidance->current_country }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Post Code</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userResidance->current_postcode }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Addres</label>
                    <textarea class="form-control" disabled>{{  $enrollment->user->userDetail->userResidance->address}}</textarea>
                </div>
            </div>
        </section>

        <section id="study_informasi" class="mt-5">
            <h4>Study Information</h4>
            <div class="card pl-3 pr-3 pt-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Study/Program</label>
                            <input class="form-control" value="{{ $enrollment->course->name }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Univertsity</label>
                            <input class="form-control" value="{{ $enrollment->university }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="funding" class="mt-5">
            <h4>Funding</h4>
            <div class="card pl-3 pr-3 pt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Type</label>
                            <input class="form-control" value="{{  $enrollment->user->userDetail->userFunding->type ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Scholarship Provide</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userFunding->provider ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Position Guarantor</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userFunding->guarantor ?? '' }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="funding" class="mt-5">
            <h4>Funding</h4>
            <div class="card pl-3 pr-3 pt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Type</label>
                            <input class="form-control" value="{{  $enrollment->user->userDetail->userFunding->type ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Scholarship Provide</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userFunding->provider ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Position Guarantor</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userFunding->guarantor ?? '' }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="passport" class="mt-5">
            <h4>Passport</h4>
            <div class="card pl-3 pr-3 pt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">No. Passport</label>
                            <input class="form-control" value="{{  $enrollment->user->userDetail->userPasport->nomor ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Date of filling</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userPasport->filling ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Expiration Date</label>
                            <input class="form-control" value="{{ $enrollment->user->userDetail->userPasport->expired ?? '' }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </section>