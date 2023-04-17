Listagem

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
</table>
<tbody>
    @foreach ($supports as $suport)
    <tr>
        <td>{{ $suport->subject }}</td>
        <td>{{ $suport->status }}</td>
        <td>{{ $suport->body }}</td>
        <td>></td>
    </tr>
    @endforeach
</tbody>
