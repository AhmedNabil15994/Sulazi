@extends('Layouts.master')
@section('title', 'Add Shop')
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
                New Shop
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                    Enter Shop details and submit </span>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <a href="{{ URL::to('/shops') }}" class="btn btn-default btn-bold">
                Back </a>
        </div>
    </div>
</div>
<!-- end:: Content Head -->
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v4__nav">

            <!--doc: Remove "kt-wizard-v4__nav-items--clickable" class and also set 'clickableSteps: false' in the JS init to disable manually clicking step titles -->
            <div class="kt-wizard-v4__nav-items kt-wizard-v4__nav-items--clickable">
                <div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
                    <div class="kt-wizard-v4__nav-body">
                        <div class="kt-wizard-v4__nav-number">
                            1
                        </div>
                        <div class="kt-wizard-v4__nav-label">
                            <div class="kt-wizard-v4__nav-label-title">
                                Information
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                Shop's Information
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end: Form Wizard Nav -->
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid">
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                        <!--begin: Form Wizard Form-->
                        <form class="kt-form" id="kt_form" method="post" action="{{ URL::to('/shops/create') }}">
                            @csrf
                            <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Shop's Details:</div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-wizard-v4__form">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Full Name </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-user"></i></span></div>
                                                                <input class="form-control" type="text" name="name" placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                <input type="number" class="form-control"  placeholder="01xxxxxxxxx" aria-describedby="basic-addon1" name="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Category  </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select class="form-control user_type" name="category_id">
                                                                <option value="">Select Category ...</option>
                                                                @foreach($data->groups as $group)
                                                                <option value="{{ $group->id }}">{{ $group->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-location"></i></span></div>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" aria-describedby="basic-addon1">
                                                                <input type="hidden" value="" name="address_details" id="address_details">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 1-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                @if(\Helper::checkRules('add-shop'))
                                <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                    Submit
                                </button>
                                @endif
                            </div>
                            <!--end: Form Actions -->
                        </form>

                        <!--end: Form Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Content -->
@stop()
@section('script')
<script src="{{ asset('assets/js/pages/custom/wizard/wizard-5.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/components/shop-add.js') }}" type="text/javascript"></script>
@endsection