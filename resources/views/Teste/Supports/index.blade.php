<h1>Listagem</h1>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Detalhes</th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
        <tr>
            <td>{{ $support->subject }}</td>
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
            <td>
                <a href="{{ route('supports.show',[$support->id]) }}">>Detalhes&nbsp; </a>
                <a href="{{ route('supports.edit',[$support->id]) }}">>Editar </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<br><br>
<a href="{{ route('supports.create') }}">Cadastrar</a>
