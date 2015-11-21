<?php
namespace restricted\models;
	
class User	{

	private $connection	=	NULL;
	private $userTable	=	NULL;
	private $userName	=	NULL;
	private $password	=	NULL;

	public function __construct( $dbConn ) {
		$this->connection	=	$dbConn;
		$this->userTable	=	new UserTable( $this->connection );
	}

	public function login( $username`, $userPwd )    {
		$flag	=	NULL;

        $this->userName	=	$username;
        $this->password	=	$userPwd;
        $flag		=	$userTable->read( $this->userName );
	} 

	public function logout(  )   {
		
	}

	public function register( array $userInfo )	{

	}
}
?>