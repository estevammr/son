<div class="panel @if($pessoa->sexo == 'F') panel-danger @else panel-info @endif">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == 'F')
                <i class="fa fa-female"></i>
            @else
                <i class="fa fa-male"></i>
            @endif
            {{ $pessoa->apelido }}
            <span class="pull-right">
                <a href="#" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i> </a>
                <span data-toggle="tooltip" data-placement="top" title="Apagar">
                    <a href="{{ route('pessoa.delete', ['id' => $pessoa->id]) }}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal" data-remote="false" ><i class="fa fa-trash"></i></a>
                </span>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h4>{{ $pessoa->nome }}</h4>
        @include('partials.telefones', ['telefones' => $pessoa->telefones])
    </div>
</div>