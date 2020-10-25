@extends('Layouts.master')
@section('title', 'Settings')
@section('content')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Settings
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">{{ count($data->data) }} Total </span>
            </div>
        </div>
    </div>
</div>
@if(\Helper::checkRules('add-group'))
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon-add"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Add New Variable
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <form class="kt-margin-l-20" id="kt_subheader_search_form" method="post" action="{{ URL::to('/variables/create') }}">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Key</label>
                                <input type="text" class="form-control" name="key" placeholder="Enter Key">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Value</label>
                                <input type="text" class="form-control" name="value" placeholder="Enter Value">
                            </div>
                        </div>
                        <div class="col-md-2 kt-margin-t-25 text-right">
                            <button type="submit" class="btn btn-label-brand btn-bold"> Add Variable</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>
@endif
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content2">
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-settings"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Settings Table
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th title="Field #1">Group ID</th>
                            <th title="Field #2">Key</th>
                            <th title="Field #3">Value</th>
                            <th title="Field #4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data->data as $group)
                        <tr id="tableRaw{{ $group->id }}">
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->key }}</td>
                            <td>{{ $group->value }}</td>
                            <td width="7%">
                                <span style="overflow: visible; position: relative; width: 110px;">      
                                    @if(\Helper::checkRules('edit-variable'))
                                    <a title="Edit details" href="{{ URL::to('/variables/edit/'.$group->id) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md">      
                                        <i class="la la-edit"></i>                      
                                    </a>       
                                    @endif         
                                    @if(\Helper::checkRules('delete-variable'))        
                                    <a onclick="deleteVariable('{{ $group->id }}')" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                       
                                        <i class="la la-trash"></i>                     
                                    </a>         
                                    @endif           
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end: Datatable -->
                <!--Begin::Pagination-->
                <div class="row">
                    <div class="col-xl-12">
                        <!--begin:: Components/Pagination/Default-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__body">
                                @include('Partials.pagination')
                            </div>
                        </div>
                        <!--end:: Components/Pagination/Default-->
                    </div>
                </div>
                <!--End::Pagination-->
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>
@stop()

@section('script')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/components/variables.js')}}"></script>
@stop()
