@extends('Layouts.master')
@section('title', 'Add Category')
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
            Add Category
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
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-information"></i>
                        </span>
                        Information
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body">
        <form action="{{ URL::to('/categories/create/') }}" method="post">
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
                                            <input class="form-control" type="text" name="title" placeholder="Category Name" value="{{ old('title') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                        <div class="col-lg-3 col-xl-9">
                                            <textarea class="form-control" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <!------------------------------------------->
                                    <hr>
                                    <div class="col-lg-9 col-xl-6">
                                        @if(\Helper::checkRules('add-category'))
                                        <button type='submit' class="btn btn-label-brand btn-bold">Add</button>
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