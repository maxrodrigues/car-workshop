@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', __('pages.service-orders.page-title'))
@section('content_header_title', __('pages.service-orders.title'))

{{-- Content body: main page content --}}

@section('content_body')
    <a href="#" class="btn btn-primary btn px-4">
        <i class="fas fa-arrow-left mr-2"></i>
        Voltar
    </a>
    <p></p>
    <div class="card card-primary card-outline">
        <div class="card-header">Cadastrar nova ordem de serviço</div>
        <form action="#" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Placa do Carro">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fas fa-car"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description"></label>
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
