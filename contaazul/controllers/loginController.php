<?php
class loginController extends Controller 
{	
	public function index()	
	{
		$data = array();	

		if(isset($_POST['email']) && !empty($_POST['email']))
		{
			$email = addslashes($_POST['email']);
			$password = addslashes($_POST['password']);

			$user = new Users();

			if($user->doLogin($email, $password))
			{
				header("Location: ".BASE_URL);
				exit;
			}
			else
			{
				$data['error'] = 'E-mail ou senha errados!';
			}
		}

		$this->loadView('login', $data);
		
	}
}
?>