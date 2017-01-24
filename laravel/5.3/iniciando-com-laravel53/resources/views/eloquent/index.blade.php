<h1>Listagem de clientes</h1>
<a href="{{ route('eloquent.client.create') }}">Criar novo cliente</a>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Endereço</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->address }}</td>
        </tr>
    @endforeach
    </tbody>
</table>