<!-- jumbotron -->
<div class="jumbotron__courses">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="jumbotron__breadcrumb">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb-title')</li>
                        </ol>
                    </nav>
                </div>
                <div class="jumbotron__preview">
                    <h2>@yield('title-jumbotron')</h2>
                    <h5>@yield('s-title-jumbotron')</h5>
                    <p>@yield('text-jumbotron')
                    </p>
                </div>
                <div class="jumbotron__button--primary">
                    <button class="btn">Chat With Us</button>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="jumbotron__image-preview">
                    <div class="jumbotron__boxImg" style="background-image: url({{ asset('assets/images/gundar-preview.png') }});
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>