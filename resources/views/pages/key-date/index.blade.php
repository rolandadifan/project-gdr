@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Research')
@section('title-jumbotron', 'Research')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel
quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit,
tenetur!')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="keyDates" class="p-2">
                <div class="keyDates__header">
                    <h2>International Programs</h2>
                    <h4>KEY DATES</h4>
                </div>
                <div class="keyDates__contents">
                    <div class="container">
                        <div class="keyDates__body">
                            <div class="keyDates__content">
                                <div class="keyDates__content__header">
                                    <h5>Application Dates</h5>
                                    <p>We have a number of different study periods. Most courses are offered through our
                                        trimester study system. With three trimesters, the next intake is never far
                                        away.</p>
                                    <p>Applications are generally open during the following periods (including non-award
                                        and incoming cross institutional applications), but not all courses are open at
                                        each application intake. Please check the relevant course page for full details.
                                    </p>
                                </div>
                                <div class="tableApplication my-5">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center p-0">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <div class="table__app">
                                                            <p>Application Dates</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Study Period</th>
                                                                        <th scope="col">Application Open</th>
                                                                        <th scope="col">Application Close</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- <tr>
                                                <td colspan="5">You have not yet started an
                                                    application using this account.</td>
                                            </tr> -->
                                                                    <tr>
                                                                        <td class="first__td">Trimester 1, 2021</td>
                                                                        <td>Closed</td>
                                                                        <td>17/02/2021</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">Trimester 2, 2021</td>
                                                                        <td>Now Open</td>
                                                                        <td>27/06/2021</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">Trimester 3, 2021</td>
                                                                        <td>Now Open</td>
                                                                        <td>11/09/2021</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="keyDates__content">
                                <div class="keyDates__content__header">
                                    <h5>Study periods</h5>
                                    <p>Most of our courses and units are studied in our trimester study schedule. To give you an idea of when you’d be studying, an outline of the upcoming trimester dates is below.
                                    </p>
                                </div>
                                <!-- table looping sejumlah db di trimester berada -->
                                <div class="tableApplication my-5">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center p-0">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <div class="table__app">
                                                            <p>Trimester 1, 2021</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Activities</th>
                                                                        <th scope="col">Dates</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- looping data from db -->
                                                                    <tr>
                                                                        <td class="first__td">Orientation week – all students</td>
                                                                        <td>Monday 1 March-Friday 5 March</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">11 teaching period begins</td>
                                                                        <td>Monday 8 March</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">11 teaching period ends</td>
                                                                        <td>Friday 28 May</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">Exams Begin</td>
                                                                        <td>Monday 7 June</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">Exams End</td>
                                                                        <td>Friday 18 June</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">11 results released</td>
                                                                        <td>Thursday 8 July</td>
                                                                    </tr>
                                                                    <!-- end looping -->

                                                                    <!-- check jika key actives, application open, else if application close, else coming soon  -->
                                                                    <tr>
                                                                        <td class="bg-light" colspan="2">Applications now closed </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tableApplication my-5">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center p-0">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <div class="table__app">
                                                            <p>Trimester 2, 2021</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Activities</th>
                                                                        <th scope="col">Dates</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- looping data from db -->
                                                                    <tr>
                                                                        <td class="first__td">Orientation week – all students</td>
                                                                        <td>Monday 1 March-Friday 5 March</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">11 teaching period begins</td>
                                                                        <td>Monday 8 March</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">11 teaching period ends</td>
                                                                        <td>Friday 28 May</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">Exams Begin</td>
                                                                        <td>Monday 7 June</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">Exams End</td>
                                                                        <td>Friday 18 June</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="first__td">11 results released</td>
                                                                        <td>Thursday 8 July</td>
                                                                    </tr>
                                                                    <!-- end looping -->

                                                                    <!-- check jika key actives, application open, else if application close, else coming soon  -->
                                                                    <tr>
                                                                        <td class="bg-light" colspan="2">Applications now open </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tableApplication my-5">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center p-0">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <div class="table__app">
                                                            <p>Trimester 3, 2021</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <!-- <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr> -->
                                                                </thead>
                                                                <tbody>
                                                                    <!-- looping data from db -->
                                                                    <!-- end looping -->

                                                                    <!-- check jika key actives, application open, else if application close, else coming soon  -->
                                                                    <tr>
                                                                        <td class="bg-light" colspan="2">Coming Soon</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end looping -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <!-- latest event -->
    <div class="container-fluid my-5 latestNews p-4">
        <div class="latestNews__header mb-3">
            <h4>Latest Event</h4>
        </div>
        <div class="row rows-cols-1 rows-cols-md-2 latestNews__content">
            <div class="col">
                <div class="latestNews__col--header">
                    <h6>COVID-19</h6>
                    <p>The Importance of Implementing Social Distancing to Prevent COVID-19</p>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod a sint nobis corrupti nesciunt,
                    minus voluptas labore error! Autem quia rem in cumque eaque excepturi ipsum veritatis,
                    distinctio soluta nemo!</p>

                <a href="#">Read more..</a>
            </div>
            <div class="col">
                <div class="latestNews__col--header">
                    <h6>University</h6>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed m. </p>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod a sint nobis corrupti nesciunt,
                    minus voluptas labore error! Autem quia rem in cumque eaque excepturi ipsum veritatis,
                    distinctio soluta nemo!</p>

                <a href="#">Read more..</a>
            </div>
        </div>
    </div>
@endsection