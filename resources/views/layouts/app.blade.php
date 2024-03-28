@extends('adminlte::page')

@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle') | @yield('subtitle') @endif
@stop

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

@section('content')
    @yield('content_body')
@stop

@section('footer')
    <div class="d-flex justify-content-center">
        <div class="mx-2">
            <strong>
                <a href="{{ config('app.company_url', '#') }}">
                    {{ config('app.company_name', 'MBR Technologia LTDA') }}
                </a>
            </strong>
        </div>
        <div class="mx-2">
            Version: {{ config('app.version', '1.0.0') }}
        </div>
    </div>
@stop
