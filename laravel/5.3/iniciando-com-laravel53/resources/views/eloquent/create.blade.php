<html>
<body>
<form method="post" action="{{ route('eloquent.client.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>Nome:</label>
    <input type="text" name="name">
    <label>Endereço:</label>
    <input type="text" name="address">
    <button type="submit">Enviar</button>
</form>
</body>
</html>