<p>
    <a href="#" class="label label-primary">Novo Telefone</a>
</p>
<table class="table table-hover">
    @foreach($pessoa->telefones as $telefone)
        <tr>
            <td>{{ $telefone->descricao }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i> </a>
                <span data-toggle="tooltip" data-placement="top" title="Apagar">
                    <a href="{{ route('telefone.delete', ['id' => $telefone->id]) }}" class="text-danger" data-toggle="modal" data-target="#deleteModal" data-remote="false" ><i class="fa fa-trash"></i></a>
                </span>
            </td>
        </tr>
    @endforeach
</table>