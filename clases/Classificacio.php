<?php

	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla classificacio
	*/

	class Classificacio
	{
		private $id;
		private $pilot_id;
		private $carrera_id;
		private $punts;
		private $sancions;


	
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
     * Gets the value of carrera_id.
     *
     * @return mixed
     */
    public function getCarreraId()
    {
        return $this->carrera_id;
    }

    /**
     * Sets the value of carrera_id.
     *
     * @param mixed $carrera_id the carrera id
     *
     */
    public function _setCarreraId($carrera_id)
    {
        $this->carrera_id = $carrera_id;
    }

    /**
     * Gets the value of punts.
     *
     * @return mixed
     */
    public function getPunts()
    {
        return $this->punts;
    }

    /**
     * Sets the value of punts.
     *
     * @param mixed $punts the punts
     *
     */
    public function _setPunts($punts)
    {
        $this->punts = $punts;
    }

    /**
     * Gets the value of sancions.
     *
     * @return mixed
     */
    public function getSancions()
    {
        return $this->sancions;
    }

    /**
     * Sets the value of sancions.
     *
     * @param mixed $sancions the sancions
     *
     */
    public function _setSancions($sancions)
    {
        $this->sancions = $sancions;
    }
}
?>