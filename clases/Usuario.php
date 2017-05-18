<?php
	
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla log_user
	*/
	class Usuario
	{
		private $id;
		private $nom;
		private $cognom;
		private $mail;
		private $password;
		private $data_naixement;
		private $rol;


	

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function _setId($id)
    {
        $this->id = $id;
    }

    /**
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    public function _setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Gets the value of cognom.
     *
     * @return mixed
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * Sets the value of cognom.
     *
     * @param mixed $cognom the cognom
     *
     * @return self
     */
    public function _setCognom($cognom)
    {
        $this->cognom = $cognom;
    }

    /**
     * Gets the value of mail.
     *
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the value of mail.
     *
     * @param mixed $mail the mail
     *
     * @return self
     */
    public function _setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    public function _setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Gets the value of data_naixement.
     *
     * @return mixed
     */
    public function getDataNaixement()
    {
        return $this->data_naixement;
    }

    /**
     * Sets the value of data_naixement.
     *
     * @param mixed $data_naixement the data naixement
     *
     * @return self
     */
    public function _setDataNaixement($data_naixement)
    {
        $this->data_naixement = $data_naixement;
    }

    /**
     * Gets the value of rol.
     *
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Sets the value of rol.
     *
     * @param mixed $rol the rol
     *
     * @return self
     */
    public function _setRol($rol)
    {
        $this->rol = $rol;
    }
}
?>