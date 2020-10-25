@extends('Layouts.master')
@section('title', $data->data->id.' - '.$data->data->title)
@section('page-style')
<!--begin::Page Custom Styles(used by this page) -->
<link href="{{ asset('assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
<!--end::Page Custom Styles -->
@endsection
@section('content')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
<div class="kt-container  kt-container--fluid ">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">
            Edit Category - {{ $data->data->title }}
        </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
    </div>
    <div class="kt-subheader__toolbar">
        <a href="{{ URL::to('/categories') }}" class="btn btn-default btn-bold">
            Back </a>
    </div>
</div>
</div>

<!-- end:: Content Head -->

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--tabs">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_1" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>  Information
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body">
        <form action="{{ URL::to('/categories/update/'.$data->data->id) }}" method="post">
            @csrf
            <div class="tab-content kt_wizard_v4" id="kt_wizard_v4">
                <div class="tab-pane active" id="kt_apps_user_edit_tab_1" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Category Info:</h3>
                                        </div>
                                    </div>
                                    <!------------------------------------------->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Category Name </label>
                                        <div class="col-lg-3 col-xl-9">
                                            <input class="form-control" type="text" name="title" placeholder="Group Name" value="{{ $data->data->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                        <div class="col-lg-3 col-xl-9">
                                            <textarea class="form-control" name="description" placeholder="Description">{{ $data->data->description }}</textarea>
                                        </div>
                                    </div>
                                    <!------------------------------------------->
                                    <hr>
                                    <div class="col-lg-9 col-xl-6">
                                        @if(\Helper::checkRules('edit-category'))
                                        <button type='submit' class="btn btn-label-brand btn-bold">Save Changes</button>
                                        @endif
                                        <a href="{{ URL::to('/categories') }}" class="btn btn-clean btn-bold">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<!-- end:: Content -->
@stop()
@section('script')
<script src="{{ asset('assets/js/pages/custom/wizard/wizard-4.js') }}" type="text/javascript"></script>
@endsection