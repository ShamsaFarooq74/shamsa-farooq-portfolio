@extends('layouts.inc.admin.master')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('service.index') }}">View Servies</a></li>
                        <li class="breadcrumb-item " aria-current="page">Edit Services</li>
                    </ol>
                </nav>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class=" py-3">
                    <div class="row">
                        <div class="col-md-7 mx-auto ">
                            <div class="card p-5">
                                <form action="{{ route('service.update', $service->id) }}" method="Post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12 mb-5">
                                            <div class="form-group">
                                                <label class="mb-3">Title</label>
                                                <input type="text" class="form-control" value="{{ $service->title }}"
                                                    name="title" placeholder="Enter Title">
                                                @if ($errors->has('title'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('title') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="form-group">
                                                <label class="mb-3">Short Description</label>
                                                <textarea type="text" class="form-control" name="description" rows="3"
                                                    placeholder="Enter Short Description">{{ $service->description}}</textarea>
                                                @if ($errors->has('description'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('description') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-5">
                                            <label class="mb-3">Already Selected Images</label>
                                            @if ($service->images)
                                                <div class="">
                                                        <img class=""src="{{ asset('assets/uploads/place_images/' . $service->images) }}"
                                                            alt=""
                                                            style="width:100px;height:100px;margin:10px;border-radius:10px;">
                                                </div>
                                            @endif
                                            <div class="form-group mb-5">
                                                <label class="mb-3">Select Place Images </label>
                                                <input type="file" class="form-control" id="images" name="images"
                                                    multiple>
                                                @if ($errors->has('images'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('images') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div id="image-preview"></div>
                                        </div>


                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>


@endsection

