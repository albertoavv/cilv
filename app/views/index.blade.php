

@foreach ($users as $usuario)

<p>Nombre: {{$usuario->real_name }} </p>
<p>Email: {{$usuario->email }} </p>
    
@endforeach