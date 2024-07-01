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
                <h1>News</h1>
            </div>

            <div class="section-body">
                <x_alert/>
                <!-- Button to trigger Add Data Modal -->
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addDataModal">
                    <i class="fa fa-plus"></i> Add Data
                </button>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Source</th>
                            <th>Publish Date</th>
                            <th>News Keywords</th>
                            <th>Abigous Keywords</th>
                            <th>Training Status</th>
                            <th>Training Date</th>
                            <th>Label</th>
                            <th>Location</th>
                            <th>Validated Date</th>
                            <th>Url</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($news as $n)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $n['title'] }}</td>
                                    <td>{{ $n['description'] }}</td>
                                    <td>{{ $n['author'] }}</td>
                                    <td>{{ $n['source'] }}</td>
                                    <td>{{ $n['publish_date'] }}</td>
                                    <td>{{ $n['news_keywords'] }}</td>
                                    <td>{{ $n['ambigous_keywords'] }}</td>
                                    <td>
                                        @if ($n['is_training'])
                                            <span class="badge badge-success">TRUE</span>
                                        @else
                                            <span class="badge badge-danger">FALSE</span>
                                        @endif
                                    </td>
                                    <td>{{ $n['training_date'] }}</td>
                                    <td>{{ $n['label'] }}</td>
                                    <td>{{ $n['location'] }}</td>
                                    <td>{{ $n['validated_date'] }}</td>
                                    <td>{{ $n['url'] }}</td>
                                    <td>
                                        <img src="{{ env('APP_API_URL') . '/uploads/news/' . $n['file_name'] }}" alt="" width="100" height="100">
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
                                                <a href="{{route('admin.news.delete', $n['id'])}}" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
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

        <x-modal id="addDataModal" title="Add Data" buttonText="Save changes">
            <form class="form-group" method="POST" action="{{route('admin.news.createOrUpdate')}}">
                <x-input name="title" title="Title"/>
                <x-input name="description" title="Description"/>
                <x-input name="aurhor" title="Aurhor"/>
                <x-input name="source" title="Source"/>
                <x-input-date name="publish_date" title="Publish Date"/>
                <x-input name="news_keywords" title="News Keywords"/>
                <x-input name="ambigous_keywords" title="Ambigous Keywords"/>
                <x-input-option name="is_training" title="Is Training">
                    <option value="true">True</option>
                    <option value="false">False</option>
                </x-input-option>
                <x-input-date name="training_date" title="Training Date"/>
                <x-input name="label" title="Label"/>
                <x-input name="location" title="Location"/>
                <x-input name="url" title="Url"/>
                <x-input name="url_request_id" title="Url Request Id"/>
            
        </x-modal>

        <x-modal id="editDataModal" title="Edit Data" buttonText="Save changes">
            <form class="form-group" method="POST" action="{{route('admin.news.createOrUpdate')}}">
                <x-input-value value="" name="title" title="Title"/>
                <x-input-value value="" name="description" title="Description"/>
                <x-input-value value="" name="aurhor" title="Aurhor"/>
                <x-input-value value="" name="source" title="Source"/>
                <x-input-date-value value="" name="publish_date" title="Publish Date"/>
                <x-input-value value="" name="news_keywords" title="News Keywords"/>
                <x-input-value value="" name="ambigous_keywords" title="Ambigous Keywords"/>
                <x-input-option value="" name="is_training" title="Is Training">
                    <option value="true">True</option>
                    <option value="false">False</option>
                </x-input-option>
                <x-input-date-value value="" name="training_date" title="Training Date"/>
                <x-input-value value="" name="label" title="Label"/>
                <x-input-value value="" name="location" title="Location"/>
                <x-input-value value="" name="url" title="Url"/>
                <x-input-value value="" name="url_request_id" title="Url Request Id"/>
        </x-modal>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/prismjs/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush
