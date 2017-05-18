<?php  
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla mundial
	*/

	class Mundial
	{
		private $any;
		private $pilot_id;
		private $scuderia_id;
		private $puntsPilot;
		private $puntsScuderia;

	
    /**
     * Gets the value of any.
     *
     * @return mixed
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * Sets the value of any.
     *
     * @param mixed $any the any
     *
     */
    public function _setAny($any)
    {
        $this->any = $any;
    }

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
     * Gets the value of puntsPilot.
     *
     * @return mixed
     */
    public function getPuntsPilot()
    {
        return $this->puntsPilot;
    }

    /**
     * Sets the value of puntsPilot.
     *
     * @param mixed $puntsPilot the punts pilot
     *
     */
    public function _setPuntsPilot($puntsPilot)
    {
        $this->puntsPilot = $puntsPilot;
    }

    /**
     * Gets the value of puntsScuderia.
     *
     * @return mixed
     */
    public function getPuntsScuderia()
    {
        return $this->puntsScuderia;
    }

    /**
     * Sets the value of puntsScuderia.
     *
     * @param mixed $puntsScuderia the punts scuderia
     *
     */
    public function _setPuntsScuderia($puntsScuderia)
    {
        $this->puntsScuderia = $puntsScuderia;
    }
}
?>