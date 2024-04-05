@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', __('pages.service-orders.page-title'))
@section('content_header_title', __('pages.service-orders.title'))

{{-- Content body: main page content --}}

@section('content_body')
    <a href=" {{ route('services.index') }}" class="btn btn-primary btn px-4">
        <i class="fas fa-arrow-left mr-2"></i>
        Voltar
    </a>
    <p></p>
    <div class="card card-primary card-outline">
        <div class="card-header">Cadastrar nova ordem de serviço</div>
        <form action="#" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Serviço</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="value">Valor</label>
                            <input type="text" class="form-control" id="value" name="value">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
@stop
