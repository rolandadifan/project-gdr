@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Location')
@section('title-jumbotron', 'Location')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel
quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit,
tenetur!')
<main>

    <div class="container-fluid">
        <div id="location" class="p-2">
            <div class="location__header">
                <h2>International Programs</h2>
                <h4>Location</h4>
            </div>
            <div class="location__mainContext">
                <h3 class="text__header mb-3">Campus Location</h3>
                <div class="container">
                    <div class="row mb-5">
                        @forelse ($locations as $location)
                        <div class="col-3 my-3">
                            <div class="card">
                                <img src="{{ Storage::url($location->thumbnail) }}" class="card-img-top"
                                    alt="{{ Str::slug($location->campus) }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $location->campus }}</h5>
                                    <p class="card-text">{{ $location->phone }}</p>
                                    <p class="card-text">{{ $location->address }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">No data found!</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
@push('addon-script')

<script>

</script>
@endpush