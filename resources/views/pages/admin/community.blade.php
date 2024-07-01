@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Community</h1>
            </div>

            <div class="section-body">
                <x-tambah-data />
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            @foreach ($community as $c)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $c['name'] }}</td>
                                    <td>{{ $c['description'] }}</td>
                                    <td>{{ $c['address'] }}</td>
                                    <td>
                                        @if ($c['status'] == 'ACTIVE')
                                            <span class="badge badge-success">ACTIVE</span>
                                        @else
                                            <span class="badge badge-danger">INACTIVE</span>
                                        @endif
                                    </td>
                                    <td class="p-2">
                                        <img src="{{ env('APP_API_URL') . '/uploads/community/' . $c['file_name'] }}"
                                            width="100" height="100" alt="">
                                    </td>
                                    <td>
                                        <x-action />
                                    </td>
                                </tr>
                                <script>
                                    console.log("{{ env('APP_API_URL') . '/uploads/community/' . $c['file_name'] }}")
                                </script>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
    <!-- Page Specific JS File -->
@endpush
