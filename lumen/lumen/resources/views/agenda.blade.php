@extends('layout')

@section('content')
    @if(count($pessoas))
        @if(isset($busca))
            <ol class="breadcrumb">
                <li>Resultado busca: {{ $busca }}</li>
            </ol>
        @endif
        @foreach($pessoas as $pessoa)
            <div class="col-md-6">
                @include('partials.contato')
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        @if(isset($busca))
                            Resultado busca: {{ $busca }}
                        @else
                            Listagem de Contatos
                        @endif
                    </div>
                    <div class="panel-body panel-warning text-warning text-center">
                        Nenhum contato encontrado.
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection