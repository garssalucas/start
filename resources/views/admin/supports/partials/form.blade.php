@csrf
    <input type="text" placeholder="Assutno" name="subject" value="{{ $support->subject ?? old('subject')}}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição">{{ $support->body ?? old('body')}}</textarea>
    <button type="submit">Enviar</button>
