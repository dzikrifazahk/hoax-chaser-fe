@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Community</h1>
            </div>

            <div class="section-body">
                <x-tambah-data/>
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
                            @foreach($community as $c)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$c['name']}}</td>
                                <td>{{$c['description']}}</td>
                                <td>{{$c['address']}}</td>
                                <td>
                                    @if($c['status'] == "ACTIVE")
                                    <span class="badge badge-success">ACTIVE</span>
                                    @else
                                    <span class="badge badge-danger">INACTIVE</span>
                                    @endif
                                </td>
                                <td>
                                    <img src="{{env('APP_API_URL').$c['file_name']}}" alt="">
                                </td>
                                <td>
                                    <x-action/>
                                </td>
                            </tr>
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

    <!-- Page Specific JS File -->
@endpush
