<div class="tab-content" id="nav-tabContent">
                                        <div>
                                            <div class="container-fluid">
                                                 @forelse ($bekasi as $bks)
                                                <div class="card my-3">
                                                    <div class="row align-items-center p-3">
                                                        <div class="col">
                                                            <h5>{{ $bks->campus }}</h5>
                                                            <p>{{ $bks->phone }}</p>
                                                            <p>{{ $bks->address }}</p>
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
                                    <nav aria-label="paginationCourses" class="mt-3">
                                        <ul class="pagination justify-content-center">
                                        {{ $bekasi->links('vendor.pagination.bootstrap-4') }}
                                        </ul>   
                                    </nav>