<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{ $p->nickname }}
      <span class="pull-right">
        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar contato"><i class="fa fa-edit"></i></a>
        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar contato"><i class="fa fa-minus-circle"></i></a>
      </span>
    </h3>
  </div>
  <div class="panel-body">
    <h3>{{ $p->name }}</h3>
    <table class="table table-hover">
      @foreach($p->phones as $phone)
        <tr>
          <td>{{ $phone->description }}</td>
          <td>{{ $phone->number }}</td>
          <td>
            <a href="#" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar telefone"><i class="fa fa-minus-circle"></i></a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
</div>