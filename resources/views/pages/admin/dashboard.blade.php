@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total News</h4>
                            </div>
                            <div class="card-body">
                                {{$total_news}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Hoax</h4>
                            </div>
                            <div class="card-body">
                                {{$total_hoax}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Actual</h4>
                            </div>
                            <div class="card-body">
                                {{$total_actual}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Not Trained</h4>
                            </div>
                            <div class="card-body">
                                {{$total_not_trained}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistics </h4>
                            <div class="card-header-action">
                                <div class="btn-group">
                                    <a href="#"
                                        class="btn btn-primary">Week</a>
                                    <a href="#"
                                        class="btn">Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart"
                                height="182"></canvas>

                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Source</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">{{$source_liputan6}}</div>
                                    <div class="font-weight-bold mb-1">Liputan6</div>
                                    <div class="progress"
                                        data-height="3">
                                        <div class="progress-bar"
                                            role="progressbar"
                                            data-width="80%"
                                            aria-valuenow="80"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">{{$source_kominfo}}</div>
                                    <div class="font-weight-bold mb-1">Kominfo</div>
                                    <div class="progress"
                                        data-height="3">
                                        <div class="progress-bar"
                                            role="progressbar"
                                            data-width="67%"
                                            aria-valuenow="25"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">{{$source_cnn}}</div>
                                    <div class="font-weight-bold mb-1">CNN</div>
                                    <div class="progress"
                                        data-height="3">
                                        <div class="progress-bar"
                                            role="progressbar"
                                            data-width="58%"
                                            aria-valuenow="25"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">{{$source_kompas}}</div>
                                    <div class="font-weight-bold mb-1">Kompas</div>
                                    <div class="progress"
                                        data-height="3">
                                        <div class="progress-bar"
                                            role="progressbar"
                                            data-width="36%"
                                            aria-valuenow="25"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">{{$source_narasi}}</div>
                                    <div class="font-weight-bold mb-1">Narasi</div>
                                    <div class="progress"
                                        data-height="3">
                                        <div class="progress-bar"
                                            role="progressbar"
                                            data-width="28%"
                                            aria-valuenow="25"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">{{$source_detik}}</div>
                                    <div class="font-weight-bold mb-1">Detik</div>
                                    <div class="progress"
                                        data-height="3">
                                        <div class="progress-bar"
                                            role="progressbar"
                                            data-width="20%"
                                            aria-valuenow="25"
                                            aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="card-header">
                                <h4>Popular Browser</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="browser browser-chrome"></div>
                                        <div class="font-weight-bold mt-2">Chrome</div>
                                        <div class="text-muted text-small"><span class="text-primary"><i
                                                    class="fas fa-caret-up"></i></span> 48%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-firefox"></div>
                                        <div class="font-weight-bold mt-2">Firefox</div>
                                        <div class="text-muted text-small"><span class="text-primary"><i
                                                    class="fas fa-caret-up"></i></span> 26%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-safari"></div>
                                        <div class="font-weight-bold mt-2">Safari</div>
                                        <div class="text-muted text-small"><span class="text-danger"><i
                                                    class="fas fa-caret-down"></i></span> 14%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-opera"></div>
                                        <div class="font-weight-bold mt-2">Opera</div>
                                        <div class="text-muted text-small">7%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-internet-explorer"></div>
                                        <div class="font-weight-bold mt-2">IE</div>
                                        <div class="text-muted text-small"><span class="text-primary"><i
                                                    class="fas fa-caret-up"></i></span> 5%</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>History URL Request</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img class="rounded-circle mr-3"
                                        width="50"
                                        src="{{ asset('img/avatar/avatar-1.png') }}"
                                        alt="avatar">
                                    <div class="media-body">
                                        <div class="float-right">5m</div>
                                        <div class="media-title">Farhan A Mujib</div>
                                        <span class="text-small text-muted">https://www.liputan6.com/news/read/5628123/kpk-tetapkan-tersangka-proyek-pengadaan-truk-basarnas-ini-sosoknya.</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="rounded-circle mr-3"
                                        width="50"
                                        src="{{ asset('img/avatar/avatar-2.png') }}"
                                        alt="avatar">
                                    <div class="media-body">
                                        <div class="float-right">12m</div>
                                        <div class="media-title">Ujang Maman</div>
                                        <span class="text-small text-muted">https://www.liputan6.com/news/read/5628123/kpk-tetapkan-tersangka-proyek-pengadaan-truk-basarnas-ini-sosoknya.</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="rounded-circle mr-3"
                                        width="50"
                                        src="{{ asset('img/avatar/avatar-3.png') }}"
                                        alt="avatar">
                                    <div class="media-body">
                                        <div class="float-right">17m</div>
                                        <div class="media-title">Rizal Fakhri</div>
                                        <span class="text-small text-muted">https://www.liputan6.com/news/read/5628123/kpk-tetapkan-tersangka-proyek-pengadaan-truk-basarnas-ini-sosoknya.</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="rounded-circle mr-3"
                                        width="50"
                                        src="{{ asset('img/avatar/avatar-4.png') }}"
                                        alt="avatar">
                                    <div class="media-body">
                                        <div class="float-right">21m</div>
                                        <div class="media-title">Alfa Zulkarnain</div>
                                        <span class="text-small text-muted">https://www.liputan6.com/news/read/5628123/kpk-tetapkan-tersangka-proyek-pengadaan-truk-basarnas-ini-sosoknya.</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="pt-1 pb-1 text-center">
                                <a href="#"
                                    class="btn btn-primary btn-lg btn-round">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-item">
                                        <h5 class="text-primary">Trusted Sources</h5>
                                        <ul class="list-unstyled list-unstyled-border">
                                            <li class="media">
                                                <a href="#">
                                                    <img class="mr-3 rounded"
                                                        width="50"
                                                        src="{{ asset('img/products/product-3-50.png') }}"
                                                        alt="product">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-title"><a href="#">liputan6.com</a></div>
                                                </div>
                                            </li>
                                            
                                            <li class="media">
                                                <a href="#">
                                                    <img class="mr-3 rounded"
                                                        width="50"
                                                        src="{{ asset('img/products/product-3-50.png') }}"
                                                        alt="product">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-title"><a href="#">cekfakta.com</a></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#">
                                                    <img class="mr-3 rounded"
                                                        width="50"
                                                        src="{{ asset('img/products/product-3-50.png') }}"
                                                        alt="product">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-title"><a href="#">kominfo.go.id</a></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#">
                                                    <img class="mr-3 rounded"
                                                        width="50"
                                                        src="{{ asset('img/products/product-3-50.png') }}"
                                                        alt="product">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-title"><a href="#">kompas.com</a></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#">
                                                    <img class="mr-3 rounded"
                                                        width="50"
                                                        src="{{ asset('img/products/product-3-50.png') }}"
                                                        alt="product">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-title"><a href="#">cnnindonesia.com</a></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#">
                                                    <img class="mr-3 rounded"
                                                        width="50"
                                                        src="{{ asset('img/products/product-3-50.png') }}"
                                                        alt="product">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-title"><a href="#">narasi.tv</a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                    <form method="post"
                        class="needs-validation"
                        novalidate="">
                        <div class="card">
                            <div class="card-header">
                                <h4>Quick Draft</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text"
                                        name="title"
                                        class="form-control"
                                        required>
                                    <div class="invalid-feedback">
                                        Please fill in the title
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="summernote-simple"></textarea>
                                </div>
                            </div>
                            <div class="card-footer pt-0">
                                <button class="btn btn-primary">Save Draft</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                            <div class="card-header-action">
                                <a href="#"
                                    class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Introduction Laravel 5
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="font-weight-600"><img
                                                        src="{{ asset('img/avatar/avatar-1.png') }}"
                                                        alt="avatar"
                                                        width="30"
                                                        class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1"
                                                    data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action"
                                                    data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Installation
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="font-weight-600"><img
                                                        src="{{ asset('img/avatar/avatar-1.png') }}"
                                                        alt="avatar"
                                                        width="30"
                                                        class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1"
                                                    data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action"
                                                    data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - MVC
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="font-weight-600"><img
                                                        src="{{ asset('img/avatar/avatar-1.png') }}"
                                                        alt="avatar"
                                                        width="30"
                                                        class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1"
                                                    data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action"
                                                    data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Migration
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="font-weight-600"><img
                                                        src="{{ asset('img/avatar/avatar-1.png') }}"
                                                        alt="avatar"
                                                        width="30"
                                                        class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1"
                                                    data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action"
                                                    data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Deploy
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="font-weight-600"><img
                                                        src="{{ asset('img/avatar/avatar-1.png') }}"
                                                        alt="avatar"
                                                        width="30"
                                                        class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1"
                                                    data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action"
                                                    data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Closing
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="font-weight-600"><img
                                                        src="{{ asset('img/avatar/avatar-1.png') }}"
                                                        alt="avatar"
                                                        width="30"
                                                        class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1"
                                                    data-toggle="tooltip"
                                                    title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action"
                                                    data-toggle="tooltip"
                                                    title="Delete"
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
