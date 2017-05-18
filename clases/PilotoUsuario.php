<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla pilot_usuari
	*/

	class PilotoUsuario
	{
		
		private $pilot_id;
		private $log_user_id;


	
    /**
     * Gets the value of pilot_id.
     *
     * @return mixed
     */
    public function getPilotId()
    {
        return $this->pilot_id;
    }

    /**
     * Sets the value of pilot_id.
     *
     * @param mixed $pilot_id the pilot id
     *
     */
    public function _setPilotId($pilot_id)
    {
        $this->pilot_id = $pilot_id;
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