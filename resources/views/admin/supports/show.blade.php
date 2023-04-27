<h1>Detalhes do id {{$support->id}}</h1>
<ul>
    <li>Assunto: {{$support->subject}}</li>
    <li>Descrição: {{$support->body}}</li>
    <li>Status: {{$support->status}}</li>
</ul>

<form action="{{route('supports.delete', $support->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>


