@extends('layouts.app-2')
@section('content')
@section('breadcrumb-title', 'Student Enrollment')
@section('title-jumbotron', 'Student Enrollment')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
   <section class="enrollmentLandingPage">
      <div class="app__header">
        <h2>International Programs</h2>
        <h4>STUDENT ENROLLMENT</h4>
      </div>
      <div class="app__content">
        <div class="container">
          <div class="row app__description">
            <div class="col">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ad, reiciendis vitae repudiandae ipsum voluptas beatae distinctio! Quos nobis, molestiae veritatis incidunt repellat enim quaerat at delectus, voluptas accusantium totam.</p>
            </div>
          </div>
          <div class="row app__stepGuide">
            <div class="col">
              <h6>Registration Step:</h6>
              <ul>
                <li>
                  <div class="app__stepGuide-1">
                    <h5>STEP 1</h5>
                    <h6>Application (Select Type)</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!</p>
                  </div>
                </li>
                <li>
                  <div class="app__stepGuide-2">
                    <h5>STEP 2</h5>
                    <h6>Personal Details (Fill the Form)</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!</p>
                  </div>
                </li>
                <li>
                  <div class="app__stepGuide-3">
                    <h5>STEP 3</h5>
                    <h6>Verification (Review and Submit)</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="row app__lastDescription">
            <div class="col">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis recusandae doloribus unde vel impedit reiciendis provident placeat voluptate et laudantium? Architecto accusamus reprehenderit non iste ipsa sequi fuga dignissimos enim.</p>
            </div>
          </div>
        </div>
        
        <div class="app__button" id="btnNewApp">
          <button class="btn button__primary">Start New Application</button>
        </div>
      </div>
    </section>

    <!-- content pemilihan program degree or non degree -->
    <section id="startNewApp" class="d-none">
      <div class="container">
        <h5>Start New Application</h5>

        <!-- wizard-progress -->
        <div class="wizard__progress">
          <div class="container">
            <div class="row justify-content-center progress__step-1">
              <div class="col active">
                <h6>Applications</h6>
                <p>Select Type</p>
              </div>
              <div class="col">
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

        <!-- checkbox for degree on non degree -->
        <div class="app__radioBox">
          <h5>Applications</h5>
          <p>Select an application type :</p>

          <!-- form radio -->
          <form>
            <div class="radioForm">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="app_radio" id="degree" value="degree">
                <label class="form-check-label" for="degree">Degree Program</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="app_radio" id="nonDegree" value="nonDegree">
                <label class="form-check-label" for="nonDegree">Non Degree program</label>
              </div>
            </div>
          </form>

          <!-- if user check non degree -->
          <div class="nonDegreePermission mt-3 d-none">
            <form>
              <div class="choicePermission">
                <p>Select the type of permission</p>

                <div class="row">
                  <div class="col-md-8 col-12">
                    <select class="form-select" size="2">
                      <option selected>
                        Open this select menu
                      </option>
                      <option value="1">
                      Open this select menu</option>
                    </select>
                  </div>
                </div>
              </div>
            </form>
        </div>
        </div>

        <div class="confirm__button">
          <p>Please click "Next" after selecting the application type</p>
          {{-- <button class="btn primary__button" id="nextBtn">Next</button> --}}
          <a href="{{ route('enrollment.input') }}" class="btn primary__button" id="nextBtn">Next</a>
        </div>
      </div>
    </section>
@endsection

