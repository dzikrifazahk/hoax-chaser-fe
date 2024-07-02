@extends('layouts.app')

@section('title', 'Debunking Page')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/prismjs/themes/prism.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Debunking</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"> <i class="fa fa-user"></i> Detail User</h6>
                                <div class="row">
                                    <div class="col-3">
                                        <span>Name</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['user_id']['name'] }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <span>Email</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['user_id']['email'] }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <span>Role</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['user_id']['role'] }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <span>Created At</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['user_id']['created_at'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"><i class="fa fa-newspaper"></i> Detail News</h6>
                                
                                <div class="row">
                                    <div class="col-3">
                                        <span>Title</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['title'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Description</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['description'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Author</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['author'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Source</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['source'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Publish Date</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['publish_date'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>News Keywords</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['news_keywords'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Ambigous</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['ambigous_keywords'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Is Training</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['is_training'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Training Date</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['training_date'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Label</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['label'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Location</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['location'] }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <span>Url</span>
                                    </div>
                                    <div class="col-auto">
                                        <span>: {{ $debunking['news']['url'] }}</span>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/prismjs/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush
