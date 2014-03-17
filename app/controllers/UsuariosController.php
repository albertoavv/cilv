<?php 

/**
* 
*/
class UsuariosController extends BaseController 
{
    
    public function get_nuevo(){
        return View::make('usuarios.nuevo');
    }
    
    public function post_nuevo(){
        $usuario = new Usuario;
        
        $usuario->nombre = Input::get('nombre');
        $usuario->apellidos = Input::get('apellidos');
        $usuario->email = Input::get('email');
        $usuario->tipo = Input::get('tipo');
        
        $usuario->save();
        
        Redirect::to('/usuarios/lista');
    }



    public function lista()
    {
       $usuarios = Usuario::all();
       return View::make('usuarios.lista')-> with('usuarios', $usuarios);
    }

 

}