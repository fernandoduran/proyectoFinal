<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla forum
	*/

	class Foro
	{
		
		private $id;
		private $missatge;
		private $moderat;
		private $log_user_id;


	
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
     */
    public function _setId($id)
    {
        $this->id = $id;
    }

    /**
     * Gets the value of missatge.
     *
     * @return mixed
     */
    public function getMissatge()
    {
        return $this->missatge;
    }

    /**
     * Sets the value of missatge.
     *
     * @param mixed $missatge the missatge
     *
     */
    public function _setMissatge($missatge)
    {
        $this->missatge = $missatge;

        return $this;
    }

    /**
     * Gets the value of moderat.
     *
     * @return mixed
     */
    public function getModerat()
    {
        return $this->moderat;
    }

    /**
     * Sets the value of moderat.
     *
     * @param mixed $moderat the moderat
     *
     */
    public function _setModerat($moderat)
    {
        $this->moderat = $moderat;
    }

    /**
     * Gets the value of log_user_id.
     *
     * @return mixed
     */
    public function getLogUserId()
    {
        return $this->log_user_id;
    }

    /**
     * Sets the value of log_user_id.
     *
     * @param mixed $log_user_id the log user id
     *
     */
    public function _setLogUserId($log_user_id)
    {
        $this->log_user_id = $log_user_id;
    }
}
?>