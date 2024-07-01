@extends('layouts.app')

@section('title', 'Community Page')

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
                                    <img src="{{ env('APP_API_URL') . '/uploads/community/' . $c['file_name'] }}" width="100" height="100" alt="">
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-auto">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#editDataModal{{$loop->iteration}}" data-backdrop="false">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal{{$loop->iteration}}" data-backdrop="false">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Edit Data Modal -->
                                    <div class="modal fade" id="editDataModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel{{$loop->iteration}}" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataModalLabel{{$loop->iteration}}">Edit Data {{ $c['name'] }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $c['name'] }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <input type="text" class="form-control" id="description" placeholder="Enter description" value="{{ $c['description'] }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control" id="address" placeholder="Enter address" value="{{ $c['address'] }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="leader">Leader</label>
                                                            <select class="form-control" id="leader">
                                                                <option value="User 1" {{ $c['leader'] == 'User 1' ? 'selected' : '' }}>User 1</option>
                                                                <option value="User 2" {{ $c['leader'] == 'User 2' ? 'selected' : '' }}>User 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file">Image</label>
                                                            <input type="file" class="form-control-file" id="file">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delete Confirmation Modal -->
                                    <div class="modal fade" id="deleteModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$loop->iteration}}" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{$loop->iteration}}">Delete Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete {{ $c['name'] }}?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
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

        <!-- Add Data Modal -->
        <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDataModalLabel">Add Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                                    @foreach ($users as $u)
                                    <option value="{{$u['id']}}">{{$u['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file">Image</label>
                                <input type="file" class="form-control-file" id="file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/prismjs/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush
