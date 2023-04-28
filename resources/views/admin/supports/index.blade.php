<h1>Listagem</h1>

<a href="{{ route('supports.create') }}">Cadastrar Novo Support</a>
<br>
<br>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Detalhes</th>
    </thead>
    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">>Detalhes&nbsp; </a>
                    <a href="{{ route('supports.edit', $support->id) }}">>Editar </a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
<br><br>

<x-pagination
    :paginator="$supports"
    :appends="$filters" />
