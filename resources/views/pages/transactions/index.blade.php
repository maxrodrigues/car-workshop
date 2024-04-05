@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', __('pages.cars.page-title'))
@section('content_header_title', __('pages.cars.title'))

{{-- Content body: main page content --}}

@section('content_body')
    <a href="{{ route('transactions.form') }}" class="btn btn-success btn px-4">
        <i class="fas fa-plus mr-2"></i>
        Casdastrar novo
    </a>
    <p></p>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">
                Fluxo de caixa
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
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th style="width: 20px;" class="text-center">#</th>
                    <th>Tipo</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
                </thead>
                <tbody>
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
                    <td>Despesa</td>
                    <td>Alimentação</td>
                    <td>Supermercado - El Dorado</td>
                    <td>R$ 325,66</td>
                    <td>01/01/2024</td>
                </tr>
                {{--                        <tr>--}}
                {{--                            <td colspan="3" class="text-center">Nenhum Veículo Cadastrado</td>--}}
                {{--                        </tr>--}}
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('plugins.Select2', true)

@section('js')
    <script type="application/javascript">
        $().ready(function (){

        })
    </script>
@stop
