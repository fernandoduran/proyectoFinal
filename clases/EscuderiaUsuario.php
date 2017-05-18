<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla escuderia_usuari
	*/

	class EscuderiaPiloto
	{
		
		private $scuderia_id;
		private $log_user_id;

	
    /**
     * Gets the value of scuderia_id.
     *
     * @return mixed
     */
    public function getScuderiaId()
    {
        return $this->scuderia_id;
    }

    /**
     * Sets the value of scuderia_id.
     *
     * @param mixed $scuderia_id the scuderia id
     *
    */
    public function _setScuderiaId($scuderia_id)
    {
        $this->scuderia_id = $scuderia_id;
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