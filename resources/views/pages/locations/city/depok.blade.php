<div class="tab-content" id="nav-tabContent">
                                        <div>
                                            <div class="container-fluid">
                                                 @forelse ($depok as $dpk)
                                                <div class="card my-3">
                                                    <div class="row align-items-center p-3">
                                                        <div class="col">
                                                            <h5>{{ $dpk->campus }}</h5>
                                                            <p>{{ $dpk->phone }}</p>
                                                            <p>{{ $dpk->address }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                    <div class="card my-3">
                                                    <div class="row align-items-center p-3">
                                                        <div class="col">
                                                            <h5>no data here</h5>
                                                            <p>no data here</p>
                                                            <p>no data here</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>