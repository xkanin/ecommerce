<?php 
	namespace ecommerce/private/models;

	Class UserTable implements TableInterface{

	
	public readUser (){
		READ INTO USERS (user_id, user_name, password, first_name, last_name, email, adress_block, address_street, address_city, ph_no)
		VALUES(" "," "," "," "," "," "," "," "," "," ");
	}
	public addUser (){
		INSERT INTO USERS (user_id, user_name, password, first_name, last_name, email, adress_block, address_street, address_city, ph_no)
		VALUES (" "," "," "," "," "," "," "," "," "," ");
	}
	public deleteUser (){
		DELETE FROM USERS (user_id, user_name, password, first_name, last_name, email, adress_block, address_street, address_city, ph_no)
	    VALUES (" "," "," "," "," "," "," "," "," "," ");
	}
	public editUser (){
		UPDATE INTO USERS (user_id, user_name, password, first_name, last_name, email, adress_block, address_street, address_city, ph_no)
		VALUES (" "," "," "," "," "," "," "," "," "," ");
	}

	

?>