@extends('Layouts.master')
@section('title', 'Add User')
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
                New User
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                    Enter user details and submit </span>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <a href="{{ URL::to('/users') }}" class="btn btn-default btn-bold">
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
                                Profile
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                User's Personal Information
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
                    <div class="kt-wizard-v4__nav-body">
                        <div class="kt-wizard-v4__nav-number">
                            3
                        </div>
                        <div class="kt-wizard-v4__nav-label">
                            <div class="kt-wizard-v4__nav-label-title">
                                Permissions
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                User's Permissions
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
                    <div class="kt-wizard-v4__nav-body">
                        <div class="kt-wizard-v4__nav-number">
                            4
                        </div>
                        <div class="kt-wizard-v4__nav-label">
                            <div class="kt-wizard-v4__nav-label-title">
                                Completed
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                Review and Submit
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
                        <form class="kt-form" id="kt_form" method="post" action="{{ URL::to('/users/create') }}">
                            @csrf
                            <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">User's Profile Details:</div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-wizard-v4__form">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
                                                                <div class="kt-avatar__holder" style="background-image: url({{ asset('assets/images/avatar.png') }})"></div>
                                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen"></i>
                                                                    <input type="file" name="image" id="image">
                                                                </label>
                                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                    <i class="fa fa-times"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Gender </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="kt-radio-inline">
                                                                <label class="kt-radio kt-radio--solid">
                                                                    <input type="radio" name="gender" checked value="1"> Male
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-radio kt-radio--solid">
                                                                    <input type="radio" name="gender" value="2"> Female
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <span class="form-text text-muted">Please select user gender</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Birth Date </label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar-check-o"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" name="birth_date" readonly placeholder="Select date" id="kt_datepicker_2">
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
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Password</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon-security"></i></span></div>
                                                                <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">User Type  </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select class="form-control user_type" name="user_type">
                                                                <option value="">Select Type ...</option>
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

                            <!--begin: Form Wizard Step 3-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Setup Your Permissions </div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v4__form">
                                        <div class="form-group">
                                            <span class="form-text text-muted">Please enter your Extra Permissions.</span>
                                        </div>
                                        <hr>
                                        <div class="kt-portlet__body">
                                            <select id='custom-headers' class="searchable" name="extra_rules[]" multiple='multiple'>
                                            @forelse($data->permissions as $permissionKey => $permissionValue)
                                                <option value="{{$permissionValue}}">{{$permissionValue}}</option>
                                            @empty
                                                <option value="0" disabled selected>-- No Data -- </option>
                                            @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 3-->
                            <!--begin: Form Wizard Step 4-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v4__review">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="kt-wizard-v4__review-item">
                                                    <div class="kt-wizard-v4__review-title">
                                                        Account Details
                                                    </div>
                                                    <div class="kt-wizard-v4__review-content">
                                                        Name:  <span class="name">User Name</span><br />
                                                        Phone: <span class="phone">+61412345678</span><br />
                                                        Email: <span class="email">johnwick@reeves.com</span>
                                                        User Type: <span class="user_type">johnwick@reeves.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="kt-wizard-v4__review-item">
                                                    <div class="kt-wizard-v4__review-title">
                                                        Address Details
                                                    </div>
                                                    <div class="kt-wizard-v4__review-content">
                                                        <div class="address">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="kt-wizard-v4__review-item">
                                            <div class="kt-wizard-v4__review-title">
                                                Extra Rules Details
                                            </div>
                                            <div class="kt-wizard-v4__review-content">
                                                <div class="extra_rules">
                                                    Address Line 1<br />
                                                    Address Line 2<br />
                                                    Melbourne 3000, VIC, Australia
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 4-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                    Previous
                                </button>
                                @if(\Helper::checkRules('add-user'))
                                <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                    Submit
                                </button>
                                @endif
                                <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                    Next Step
                                </button>
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
<script src="{{ asset('assets/js/pages/custom/wizard/wizard-4.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/components/user-add.js') }}" type="text/javascript"></script>
@endsection