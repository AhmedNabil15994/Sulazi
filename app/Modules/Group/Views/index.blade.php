@extends('Layouts.master')
@section('title', 'Group')
@section('content')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Groups
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                    {{ count($data->data) }} Total </span>
            </div>
        </div>
    </div>
</div>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Groups Table
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            @if(\Helper::checkRules('add-group'))
                            <a href="{{ URL::to('/groups/add') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Add Group
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th title="Field #1">Group ID</th>
                            <th title="Field #2">Title</th>
                            <th title="Field #3">Rules</th>
                            <th title="Field #4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data->data as $group)
                        <tr id="tableRaw{{ $group->id }}">
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->title }}</td>
                            <td>
                                <div class="rules">
                                    @if($group->permissions != '')
                                    @foreach($group->permissions as $key => $rule)
                                    @if($key != 0)
                                        | <span>{{ $rule }}</span>
                                    @else
                                        <span>{{ $rule }}</span>
                                    @endif
                                    @endforeach
                                    @else
                                    -----
                                    @endif
                                </div>
                            </td>
                            <td>
                                @if($group->id == 1)
                                -----
                                @else
                                <span style="overflow: visible; position: relative; width: 110px;">      
                                    @if(\Helper::checkRules('edit-group'))
                                    <a title="Edit details" href="{{ URL::to('/groups/edit/'.$group->id) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md">      
                                        <i class="la la-edit"></i>                      
                                    </a>       
                                    @endif         
                                    @if(\Helper::checkRules('delete-group'))        
                                    <a onclick="deleteGroup('{{ $group->id }}')" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                       
                                        <i class="la la-trash"></i>                     
                                    </a>         
                                    @endif           
                                </span>
                                @endif
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
    <script src="{{ asset('assets/js/pages/crud/metronic-datatable/base/html-table.js')}}"></script>
    <script src="{{ asset('assets/components/groups.js')}}"></script>
@stop()
