<?php
class logoutController extends Controller
{	
	public function __construct()
	{
		$user = new Users();
		if ($user->isLogged() == false)
		{
			header("Location: ".BASE_URL."login");
		}
	}
	
	public function index()
	{
		$user = new Users();
		$user->logout();
		header("Location: ".BASE_URL);
	}
}
?>