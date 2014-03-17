<h1>Lista de Usuarios</h1>
@foreach ($usuarios as $usuario)

<p>Nombre: {{$usuario->nombre }} </p>
<p>Apellidos: {{$usuario->apellidos }} </p>
<p>Email: {{$usuario->email }} </p>
<p>Tipo: {{$usuario->tipo }} </p>
    
@endforeach