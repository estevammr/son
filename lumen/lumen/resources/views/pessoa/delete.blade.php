<h4 class="text-center">Deseja realmente apagar o contato {{ $pessoa->apelido }} ?</h4>
<form action="{{ route('pessoa.destroy', ['id' => $pessoa->id]) }}" method="post" class="text-center">
    <input type="hidden" name="_method" value="DELETE" />
    <button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-danger">Apagar</button>
</form>