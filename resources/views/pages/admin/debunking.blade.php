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
                <x_alert/>
                <!-- Button to trigger Add Data Modal -->
                {{-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addDataModal">
                    <i class="fa fa-plus"></i> Add Data
                </button> --}}

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Evidence Link</th>
                            <th>Reason</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($debunking as $db)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $db['evidence_links'] }}</td>
                                <td>{{ $db['reason'] }}</td>
                                <td>
                                    <img src="{{ env('APP_API_URL') . '/uploads/community/' . $db['file_name'] }}" alt="" width="100" height="100">
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-auto p-2">
                                            <a href="{{route('admin.debunking.detail', $db['id'])}}" class="btn btn-info">
                                                Detail
                                            </a>
                                        </div>
                                        <div class="col-auto p-2">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#editDataModal{{$loop->iteration}}" data-backdrop="false">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </div>
                                        <div class="col-auto p-2">
                                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal{{$loop->iteration}}" data-backdrop="false">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- <!-- Edit Data Modal -->
                                    <div class="modal fade" id="editDataModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel{{$loop->iteration}}" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataModalLabel{{$loop->iteration}}">Edit Data {{ $db['evidence_links'] }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $db['evidence_links'] }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <input type="text" class="form-control" id="description" placeholder="Enter description" value="{{ $db['description'] }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control" id="address" placeholder="Enter address" value="{{ $db['address'] }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="leader">Leader</label>
                                                            <select class="form-control" id="leader">
                                                                <option value="User 1" {{ $db['leader'] == 'User 1' ? 'selected' : '' }}>User 1</option>
                                                                <option value="User 2" {{ $db['leader'] == 'User 2' ? 'selected' : '' }}>User 2</option>
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
                                    </div> --}}

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
                                                    <p>Are you sure you want to delete {{ $db['evidence_links'] }}?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="{{ route('admin.community.delete', $db['id']) }}" class="btn btn-danger">Delete</a>
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
                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.community.createOrUpdate') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter description">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="leader">Leader</label>
                                <select class="form-control" id="leader" name="leader">
                                    @foreach ($users as $u)
                                    <option value="{{$u['id']}}">{{$u['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="file">Image</label>
                                <input type="file" class="form-control-file" id="file">
                            </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
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
