@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Technologi News')
@section('title-jumbotron', 'Technologi News')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
    <div class="container-fluid">
        <div id="details" class="p-2">
            <div class="details__header">
                <h2>International Programs</h2>
                <h4>News</h4>
            </div>
            <div class="news__body">
                <div class="container">
                    <div class="details__body">
                        <div class="card">
                            <div class="card__boxImg">
                                <img src="../../assets/images/communication.png" alt="">
                            </div>
                            <div class="card__body">
                                <h5>Technology News</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea a minus dolorum temporibus, alias saepe itaque qui esse nihil fugiat magni non quasi accusantium rem nobis! Eligendi consequuntur veritatis maiores.
                                Nam quo sed, sint debitis necessitatibus asperiores numquam nisi voluptatibus, ad aperiam labore reprehenderit alias vitae voluptatem tenetur atque ab quis laudantium eligendi incidunt quod, aut dicta. Beatae, minima debitis.
                                Id porro exercitationem, ea neque maiores dolor? Adipisci aspernatur nemo, reprehenderit necessitatibus, esse commodi quisquam molestias cum ad totam omnis quas perspiciatis tempore fugiat consequatur iste explicabo ea accusamus doloribus?
                                Aliquam earum deserunt illum veritatis, vero dolore, minima a repellat, quas ex corporis facere explicabo? Dicta perferendis asperiores totam a natus blanditiis deleniti nihil. Recusandae odit sit similique repudiandae minima.
                                Eaque numquam repudiandae itaque blanditiis! Beatae, excepturi molestias. Tenetur illum error eos consectetur! Quod, sint! Accusantium repudiandae exercitationem voluptates voluptatibus ipsa, laboriosam, consectetur ullam fuga quibusdam neque sunt beatae recusandae.
                                Odit voluptate alias nulla iure quaerat vitae modi veniam ratione praesentium officia in necessitatibus nostrum saepe ipsum laborum rerum id quibusdam, facilis eum? Consequuntur nisi incidunt temporibus consectetur minus commodi.
                                Qui consectetur sapiente exercitationem repudiandae voluptate, eligendi eum harum dignissimos officiis, atque earum? Facilis sed possimus neque est, incidunt dolorum distinctio illo laudantium aut, debitis eaque aperiam culpa alias necessitatibus!
                                Esse architecto deleniti beatae aspernatur fuga quia in ipsa quaerat veniam obcaecati cumque at porro sint numquam, iste eveniet quidem ipsum reiciendis? Dolorum incidunt et dignissimos, dicta eum tenetur corrupti!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </main>
  <main>
    <div class="container">
        <div id="details" class="p-2">
            <div class="details">
                <h5>More News</h5>
            </div>

            <div class="details__body">
                <!-- looping di BE -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center gx-2">
                    <div class="col">
                        <div class="card">
                            <div class="card__header">
                                <img class="card-img-top" src="./../../assets/images/newsImages.png">
                            </div>
                            <div class="card-body">
                                <h5>Lorem ipsum, dolor sit amet consectetur.</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur placeat repudiandae, exercitationem nam, deleniti excepturi magni eos cumque, sapiente ea quis repellat mollitia corporis magnam quod commodi voluptatibus sed? Quam.</p>
                                <a href="#">Read More...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card__header">
                                <img class="card-img-top" src="./../../assets/images/newsImages.png">
                            </div>
                            <div class="card-body">
                                <h5>Lorem ipsum, dolor sit amet consectetur.</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur placeat repudiandae, exercitationem nam, deleniti excepturi magni eos cumque, sapiente ea quis repellat mollitia corporis magnam quod commodi voluptatibus sed? Quam.</p>
                                <a href="#">Read More...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card__header">
                                <img class="card-img-top" src="./../../assets/images/newsImages.png">
                            </div>
                            <div class="card-body">
                                <h5>Lorem ipsum, dolor sit amet consectetur.</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur placeat repudiandae, exercitationem nam, deleniti excepturi magni eos cumque, sapiente ea quis repellat mollitia corporis magnam quod commodi voluptatibus sed? Quam.</p>
                                <a href="#">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- end dinamis -->

@endsection
