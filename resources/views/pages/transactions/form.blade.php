@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', __('pages.service-orders.page-title'))
@section('content_header_title', __('pages.service-orders.title'))

{{-- Content body: main page content --}}

@section('content_body')
    <a href=" {{ route('transactions.index') }}" class="btn btn-primary btn px-4">
        <i class="fas fa-arrow-left mr-2"></i>
        Voltar
    </a>
    <p></p>
    <div class="card card-primary card-outline">
        <div class="card-header">Cadastrar nova ordem de serviço</div>
        <form action="#" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <label for="name">Tipo</label>
                            <select class="form-control" id="type" name="type">
                                <option value="">.: Selecione :.</option>
                                <option value="1">Receita</option>
                                <option value="2">Despesa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="~category">Categoria</label>
                            <select class="form-control" id="category" name="category">
                                <option value="">.: Selecione :.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="value">Descrição</label>
                            <input type="text" class="form-control" id="value" name="value">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="value">Valor</label>
                            <input type="text" class="form-control" id="value" name="value">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="generated_at">Data</label>
                            <input type="date" class="form-control" id="generated_at" name="generated_at">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Observação</label>
                            <textarea class="form-control resize-none" id="description" name="description" style="resize: none"></textarea>
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
