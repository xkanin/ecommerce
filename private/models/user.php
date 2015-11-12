<?php
namespace private\models;
	
class user	{

	private $connection	=	NULL;

	public function __construct( $dbConn )	{
		
	}

	public function login()	{
	try
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['user_pass']))
             {
             $_SESSION['user_session'] = $userRow['user_id'];
             return true;
             }
             else
             {
             return false;
             }
          }
	} 

	public function logout()	{
		session_destroy();o
        unset($_SESSION['user_session']);
        return true;
	}

	public function register()	{
	try
       {
       $new_password = password_hash($upass, PASSWORD_DEFAULT);

       $stmt = $this->db->prepare("INSERT INTO users(user_name, password, first_name, last_name, email, address_block, address_street, address_city, ph_no) 
                                   VALUES(:user_name, :password, :first_name, :last_name, :email, :address_block, :address_street, :address_city, :ph_no)");  
        $stmt->bindparam(":user_name", $user_name);
        $stmt->bindparam(":password", $password);
        $stmt->bindparam(":first_name", $first_name);
        $stmt->bindparam(":last_name", $last_name);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":address_block", $address_block);
        $stmt->bindparam(":address_street", $first_name);
        $stmt->bindparam(":address_city", $first_name);
        $stmt->bindparam(":first_name", $first_name);            
        $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       } 
	}

	public function 
}
?>