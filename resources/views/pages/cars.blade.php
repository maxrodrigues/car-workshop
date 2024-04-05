@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', __('pages.cars.page-title'))
@section('content_header_title', __('pages.cars.title'))

{{-- Content body: main page content --}}

@section('content_body')
    <a href="#" class="btn btn-primary btn px-4">
        <i class="fas fa-arrow-left mr-2"></i>
        Voltar
    </a>
    <p></p>
    <div class="card card-primary card-outline">
        <div class="card-header">Cadastrar novo veículo</div>
        <form action="#" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Cliente</label>
                            <input type="text" class="form-control" id="client" name="client">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="plate">Placa</label>
                            <input type="text" class="form-control" id="plate" name="plate" placeholder="Placa do Carro">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="brand">Marca</label>
                            <select id="brand" name="brand" class="form-control">
                                <option value="1">Ford</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="brand">Modelo</label>
                            <select id="model" name="model" class="form-control">
                                <option value="1">Ford</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>Cor</label>
                            <input type="text" class="form-control" id="color" name="color">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Ano</label>
                            <input type="text" class="form-control" id="color" name="color">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>KM Atual</label>
                            <input type="text" class="form-control" id="color" name="color">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Combustivel</label>
                            <input type="text" class="form-control" id="color" name="color">
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

@section('plugins.Select2', true)

@section('js')
    <script type="application/javascript">
        $().ready(function (){

        })
    </script>
@stop
