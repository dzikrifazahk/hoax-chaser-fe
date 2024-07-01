@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/prismjs/themes/prism.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Community</h1>
            </div>

            <div class="section-body">
                <!-- Button to trigger Add Data Modal -->
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addDataModal">
                    <i class="fa fa-plus"></i> Add Data
                </button>

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
                                        <div class="row">
                                            <div class="col-auto">
                                                <button class="btn btn-primary" type="button" data-toggle="modal"
                                                    data-target="#editDataModal">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-danger" type="button" class="btn btn-primary"
                                                    data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <x-modal id="exampleModal" title="Modal Title" buttonText="Save changes">
            <p>Modal body text goes here.</p>
        </x-modal>

        <x-modal id="addDataModal" title="Add Data" buttonText="Save changes">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter description">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="leader">Leader</label>
                    <select class="form-control" id="leader">
                        <option value="ACTIVE">User 1</option>
                        <option value="INACTIVE">User 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="file">Image</label>
                    <input type="file" class="form-control-file" id="file">
                </div>
            </form>
        </x-modal>

        <x-modal id="editDataModal" title="Edit Data" buttonText="Save changes">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter description">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="leader">Leader</label>
                    <select class="form-control" id="leader">
                        <option value="ACTIVE">User 1</option>
                        <option value="INACTIVE">User 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="file">Image</label>
                    <input type="file" class="form-control-file" id="file">
                </div>
            </form>
        </x-modal>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/prismjs/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush
