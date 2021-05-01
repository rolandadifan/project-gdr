@extends('layouts.life-campus')
@section('content')
@section('breadcrumb-title', 'Student Life')
@section('title-jumbotron', 'Student Life')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
 <main>
        <div class="container">
            <div id="lifeStudent" class="p-2">
                <div class="lifeStudent__header">
                    <h2>International Programs</h2>
                    <h4>STUDENT LIFE</h4>
                </div>

                <!-- card profile -->
                <div class="circleProfile">
                    <div class="circleProfile__Header">
                        <h5>Student life at Gunadarma</h5>
                    </div>
                    <div class="circleProfile__body">
                        <div class="container">
                            <div class="row justify-content-center row-cols-lg-3 row-cols-md-2 row-cols-1 gx-5">
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="./../../assets/images/circle_image.png">
                                    </div>
                                    <div class="circleProfile__title">
                                        <p>Organization</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="./../../assets/images/circle_image2.png">
                                    </div>
                                    <div class="circleProfile__title">
                                        <p>Clubs and societies</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="./../../assets/images/circle_image.png">
                                    </div>
                                    <div class="circleProfile__title">
                                        <p>Opportunity to Work</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- custom card content -->
                <div class="customCard__contents">
                    <div class="card">
                        <div class="row row-cols-1 g-0 align-items-start">
                            <div class="col-md-5">
                            <div class="customCard__boxImg">
                                <img
                                src="./../../assets/images/gunadarma-life.png"
                                alt="Basketball Park"
                                />
                            </div>
                            </div>
                            <div class="col-md-7">
                            <div class="customCard__content">
                                <h2>Campus H</h2>
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="infoCard mt-5">
                    <div class="row row-cols-1 row-cols-lg-2 justify-content-center gx-3">
                        <div class="col">
                            <div class="infoCard__header">
                                <h5>Library</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non, inventore expedita ex accusantium tempora doloribus, obcaecati repudiandae, sequi velit esse. Asperiores facilis perspiciatis eaque consectetur delectus numquam similique pariatur.
                                    Ipsam culpa sunt officia. Facere culpa sed velit illum incidunt sint dolore nisi recusandae ex amet omnis error ad, reprehenderit blanditiis rerum animi ea! Suscipit beatae eius magnam illo maiores?
                                    Consequuntur quas molestias dolores itaque accusamus maiores, assumenda obcaecati commodi repellendus error sint temporibus mollitia. Quam possimus repudiandae alias facere cumque iure ut vel aut delectus, quisquam tempore amet eum.
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="infoCard__header">
                                <h5>The Integrated Laboratory</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non, inventore expedita ex accusantium tempora doloribus, obcaecati repudiandae, sequi velit esse. Asperiores facilis perspiciatis eaque consectetur delectus numquam similique pariatur.
                                    Ipsam culpa sunt officia. Facere culpa sed velit illum incidunt sint dolore nisi recusandae ex amet omnis error ad, reprehenderit blanditiis rerum animi ea! Suscipit beatae eius magnam illo maiores?
                                    Consequuntur quas molestias dolores itaque accusamus maiores, assumenda obcaecati commodi repellendus error sint temporibus mollitia. Quam possimus repudiandae alias facere cumque iure ut vel aut delectus, quisquam tempore amet eum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customCard__contents">
                    <div class="card">
                        <div class="row row-cols-1 g-0 align-items-start">
                            <div class="col-md-5">
                            <div class="customCard__boxImg">
                                <img
                                src="./../../assets/images/gunadarma-life.png"
                                alt="Basketball Park"
                                />
                            </div>
                            </div>
                            <div class="col-md-7">
                            <div class="customCard__content">
                                <h2>Sport Center</h2>
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="infoCard mt-5">
                    <div class="row row-cols-1 row-cols-lg-2 justify-content-center gx-3">
                        <div class="col">
                            <div class="infoCard__header">
                                <h5>Getting to Campus</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non, inventore expedita ex accusantium tempora doloribus, obcaecati repudiandae, sequi velit esse. Asperiores facilis perspiciatis eaque consectetur delectus numquam similique pariatur.
                                    Ipsam culpa sunt officia. Facere culpa sed velit illum incidunt sint dolore nisi recusandae ex amet omnis error ad, reprehenderit blanditiis rerum animi ea! Suscipit beatae eius magnam illo maiores?
                                    Consequuntur quas molestias dolores itaque accusamus maiores, assumenda obcaecati commodi repellendus error sint temporibus mollitia. Quam possimus repudiandae alias facere cumque iure ut vel aut delectus, quisquam tempore amet eum.
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="infoCard__header">
                                <h5>Parking</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non, inventore expedita ex accusantium tempora doloribus, obcaecati repudiandae, sequi velit esse. Asperiores facilis perspiciatis eaque consectetur delectus numquam similique pariatur.
                                    Ipsam culpa sunt officia. Facere culpa sed velit illum incidunt sint dolore nisi recusandae ex amet omnis error ad, reprehenderit blanditiis rerum animi ea! Suscipit beatae eius magnam illo maiores?
                                    Consequuntur quas molestias dolores itaque accusamus maiores, assumenda obcaecati commodi repellendus error sint temporibus mollitia. Quam possimus repudiandae alias facere cumque iure ut vel aut delectus, quisquam tempore amet eum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>

     @include('include.thumbnail-life')
     <main>
        <div class="container">
            <div id="whyStudy" class="p-2">
                <div class="whyStudy__info">
                    <div class="whyStudy__info--header">
                        <h5>Life At Gunadarma</h5>
                    </div>
                    <div class="whyStudy__info--body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt officia dignissimos pariatur tempora illo unde a labore blanditiis exercitationem commodi, facilis ex deleniti iste possimus quam sed esse expedita. Dolores?
                            Maiores delectus dicta mollitia a, laborum minus iste illum ullam, impedit autem, praesentium eum? Ipsa quidem doloremque at quia ratione ullam maxime, odit iusto obcaecati accusamus laudantium, maiores placeat quam!
                            Sequi quam labore illo, quisquam consequuntur excepturi deleniti veritatis consequatur. Aperiam doloribus esse a ullam modi minima minus temporibus tempore dicta, quibusdam rem distinctio dignissimos facere nulla dolore voluptatibus dolor?
                            Facere cum dolorem iure totam eum tenetur explicabo quos iusto veritatis animi ab dolor distinctio architecto enim quisquam, magni modi dignissimos doloremque quas eius itaque beatae esse aliquam nesciunt! Quo.
                            Asperiores quis, modi suscipit illo et officiis totam, optio explicabo reprehenderit eligendi eum ducimus voluptatum obcaecati minima eos ipsam numquam sed fugiat. Error blanditiis earum hic omnis cum perspiciatis quae?
                        </p>
                    </div>
                </div>

                <div class="cardVideo">
                    <div class="cardVideo__header">
                        <h5>Gunadarma University Student Community</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque?
                            Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet.
                            Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore.</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4" controls> 
                                    Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardVideoReverse">
                    <div class="cardVideo__header">
                        <h5>Career Planning</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque?
                            Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet.
                            Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore.</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4" controls> 
                                    Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

     

@endsection
