@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Dashboard')
@section('content_header_title', 'Dashboard')

{{-- Content body: main page content --}}

@section('content_body')
    <a href="#" class="btn btn-success btn-lg px-4">
        Abrir Nova OS
    </a>
    <p></p>
    <div class="row">
        <div class="col-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>150</h3>
                    <p>OS no Mês</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Info
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>OS no Mês</p>
                </div>
                <div class="icon">
                    <i class="fas fa-car-side"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Info
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop
