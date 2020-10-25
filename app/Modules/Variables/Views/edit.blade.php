@extends('Layouts.master')
@section('title', $data->data->id.' - '.$data->data->key)

@section('content')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
<div class="kt-container  kt-container--fluid ">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">
            Edit Varirable - {{ $data->data->key }}
        </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
    </div>
    <div class="kt-subheader__toolbar">
        <a href="{{ URL::to('/variables') }}" class="btn btn-default btn-bold">
            Back </a>
    </div>
</div>
</div>
<!-- end:: Content Head -->

<!-- begin:: Content -->

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon-edit-1"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Edit Variable Information
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <form class="kt-margin-l-20" id="kt_subheader_search_form" method="post" action="{{ URL::to('/variables/update/'.$data->data->id) }}">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Key</label>
                                <input type="text" class="form-control" name="key" placeholder="Enter Key" value="{{ $data->data->key }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Value</label>
                                <input type="text" class="form-control" name="value" placeholder="Enter Value" value="{{ $data->data->value }}">
                            </div>
                        </div>
                        <div class="col-md-2 kt-margin-t-25 text-right">
                            <button type="submit" class="btn btn-label-brand btn-bold"> Edit Variable</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>
<!-- end:: Content -->
@stop()
@section('script')
<script src="{{ asset('assets/js/pages/custom/wizard/wizard-4.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type=" text/javascript"></script>
<script src="{{ asset('assets/plugins/lou-multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{ asset('assets/plugins/quicksearch/jquery.quicksearch.js')}}"></script>
<script src="{{ asset('assets/components/user-add.js') }}" type="text/javascript"></script>
@endsection