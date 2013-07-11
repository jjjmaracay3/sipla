<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that ch:>:ecks if the provided
 * data can identity the user.
 */

//logueo con bd
{
private $_id;
	
	public function authenticate()
	{
		 $user=Funcionario::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		 if($user===null)
			 $this->errorCode=self::ERROR_USERNAME_INVALID;
		 else if(!$user->validatePassword($this->password))
		 	$this->errorCode=self::ERROR_PASSWORD_INVALID;
		 else
		 {
			 $this->_id=$user->nu_funcionario;
		 	 //$this->setState('rol', $user->rol);
			 $this->username=$user->username;
			 $this->errorCode=self::ERROR_NONE;
		 }
		 return $this->errorCode==self::ERROR_NONE;
	 }
		 
	 public function getId()
	 {
		 return $this->_id;
	 }

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	/*public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/
}
