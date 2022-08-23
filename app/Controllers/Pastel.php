<?php namespace App\Controllers;

use App\Models\usuariosModel;
use App\Models\adminModel;

class Pastel extends BaseController
{
	public function adminUsuarios()
	{
		
		$variable = new usuariosModel($db);
		$info['lobo']=$variable->findAll();

		return view('adminU1').view('adminU2',$info).view('adminU3');
	}

	public function Inicio()
	{
		return view('inicio');
	}
	public function adminBoda()
	{
		return view('adminB1').view('adminB2').view('adminB3');
	}

	public function adminInfantiles()
	{
		return view('adminI1').view('adminI2').view('adminI3');
	}

	public function adminJumbo()
	{
		return view('adminJ1').view('adminJ2').view('adminJ3');
	}

	public function adminAnios()
	{
		return view('adminA1').view('adminA2').view('adminA3');
	}

	public function index()
	{
		return view('index1').view('index2').view('index3');
	}

	public function Boda()
	{
		return view('Boda1').view('Boda2').view('Boda3');
	}

	public function Infantiles()
	{
		return view('Infantiles1').view('Infantiles2').view('Infantiles3');
	}

	public function Jumbo()
	{
		return view('Jumbo1').view('Jumbo2').view('Jumbo3');
	}

	public function Anios()
	{
		return view('Anios1').view('Anios2').view('Anios3');
	}

	public function LoginU(){
		$request=\Config\Services::request();
		$firstName=$request->getPost('nombre');
		$lastName=$request->getPost('apellido'); 
		$age=$request->getPost('edad'); 
		$phone=$request->getPost('telefono'); 
		$email=$request->getPost('correo'); 
		$user=$request->getPost('username');  
		$password=$request->getPost('password'); 

		$data = [
    	'nombre' => $firstName,
    	'apellido' => $lastName,
    	'edad' => $age,
    	'telefono' => $phone,
    	'correoElectronico' => $email,
    	'username' => $user,
    	'contrasenia' => $password
		];
		$variable= new usuariosModel($db);
		 $variable->insert($data);
		return view('LoginU1').view('LoginU2');
	}
	public function LoginA()
	{
		return view('LoginA1').view('LoginA2');
	}

	public function Registro()
	{
		return view('Registro1').view('Registro2');
	}

	public function Compra()
	{
		return view('compra');
	}
	public function validarA(){
		$request=\Config\Services::request();
		$u=$request->getPost('user');
		$c=$request->getPost('contrasenia');
		$Usuario= new adminModel();
		$datosUsuario=$Usuario->obtenerAdmin(['username' => $u]);
			if(count($datosUsuario)>0 && $c===$datosUsuario[0]['contrasenia']){
					$data =[
					"username" => $datosUsuario[0]['username'],
					"contrasenia" => $datosUsuario[0]['contrasenia']
					];
						$session =session();
						$session->set($data);
						$variable = new usuariosModel($db);
						$info['lobo']=$variable->findAll();
						return view('adminU1').view('adminU2',$info).view('adminU3');
			}else{
				return view('LoginU1').view('LoginU2');
			}

	}

	public function validarU(){
		$request=\Config\Services::request();
		$u=$request->getPost('user');
		$c=$request->getPost('contrasenia');
		$Usuario= new usuariosModel();
		$datosUsuario=$Usuario->obtenerUsuario(['username' => $u]);
			if(count($datosUsuario)>0 && $c===$datosUsuario[0]['contrasenia']){
					$data =[
					"username" => $datosUsuario[0]['username'],
					"contrasenia" => $datosUsuario[0]['contrasenia']
					];
						$session =session();
						$session->set($data);
						return view('index1').view('index2');
			}else{
				return view('LoginA1').view('LoginA2');
			}

	}
		
}
