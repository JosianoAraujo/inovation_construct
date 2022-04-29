@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="erros">{{$error}}</li>
        @endforeach
    </ul>
@endif
