@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', __('pages.service-orders.page-title'))
@section('content_header_title', __('pages.service-orders.title'))

{{-- Content body: main page content --}}

@section('content_body')
    <a href="{{ route('services.form') }}" class="btn btn-success btn px-4">
        <i class="fas fa-plus mr-2"></i>
        Casdastrar novo
    </a>
    <p></p>
    <div class="card card-primary card-outline">
        <div class="card-title">
            Serviços Cadastrados
        </div>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Pesquisar...">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 20px;" class="text-center">#</th>
                        <th>Serviço</th>
                        <th class="w-25">Valor</th>
                    </tr>
                </thead>
                <tbody>
{{--                    <tr>--}}
{{--                        <td colspan="3" class="text-center">Nenhum Serviço Cadastrado</td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td>
                            <a href="#">
                                <i class="fas fa-pen text-success m-1"></i>
                            </a>
                            <a href="#">
                                <i class="fas fa-eye text-info m-1"></i>
                            </a>
                            <a href="#">
                                <i class="fas fa-trash text-danger m-1"></i>
                            </a>
                        </td>
                        <td>Manutenção</td>
                        <td>R$ 100,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
