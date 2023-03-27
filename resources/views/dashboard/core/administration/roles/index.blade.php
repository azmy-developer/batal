@extends('dashboard.layout.layout')


@section('sub-header')
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 py-2">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('dash.home')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('dash.roles')}}</li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>

            <div class="flex-row ml-auto">
                <a href="{{route('dashboard.core.administration.roles.create')}}" class="btn btn-primary">{{__('dash.add_new')}}</a>
            </div>



        </header>
    </div>


@endsection


@section('content')


    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    {{$dataTable->table(['class'=>'table dt-table-hover'])}}

                </div>
            </div>

        </div>

    </div>

@endsection

@push('script')

    {{$dataTable->scripts()}}
@endpush
