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
                            <label for="name">Cliente</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <label for="zipcode">CEP</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="address">Enderećo</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="form-group">
                            <label for="number">Número</label>
                            <input type="text" class="form-control" id="number" name="number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="complement">Complemento</label>
                            <input type="text" class="form-control" id="complement" name="complement">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="neighborhood">Bairro</label>
                            <input type="text" class="form-control" id="neighborhood" name="neighborhood">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <select name="state" id="state" class="form-control">
                                <option value="">Selecione o Estado</option>
                                <option value="AC">AC</option>
                            </select>
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
