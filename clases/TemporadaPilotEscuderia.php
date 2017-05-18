<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla temporada_pilot_escuderia
	*/

	class TemporadaPilotEscuderia
	{
		private $temporada_any;
		private $pilot_id;
		private $scuderia_id;
		private $xasis;
		private $numero_pilot;
		private $director;
		private $jefeEquip;
		private $nomEscuderia;


	
    /**
     * Gets the value of temporada_any.
     *
     * @return mixed
     */
    public function getTemporadaAny()
    {
        return $this->temporada_any;
    }

    /**
     * Sets the value of temporada_any.
     *
     * @param mixed $temporada_any the temporada any
     *
     */
    public function _setTemporadaAny($temporada_any)
    {
        $this->temporada_any = $temporada_any;
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
     * Gets the value of xasis.
     *
     * @return mixed
     */
    public function getXasis()
    {
        return $this->xasis;
    }

    /**
     * Sets the value of xasis.
     *
     * @param mixed $xasis the xasis
     *
     */
    public function _setXasis($xasis)
    {
        $this->xasis = $xasis;
    }

    /**
     * Gets the value of numero_pilot.
     *
     * @return mixed
     */
    public function getNumeroPilot()
    {
        return $this->numero_pilot;
    }

    /**
     * Sets the value of numero_pilot.
     *
     * @param mixed $numero_pilot the numero pilot
     *
     */
    public function _setNumeroPilot($numero_pilot)
    {
        $this->numero_pilot = $numero_pilot;
    }

    /**
     * Gets the value of director.
     *
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Sets the value of director.
     *
     * @param mixed $director the director
     *
     */
    public function _setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * Gets the value of jefeEquip.
     *
     * @return mixed
     */
    public function getJefeEquip()
    {
        return $this->jefeEquip;
    }

    /**
     * Sets the value of jefeEquip.
     *
     * @param mixed $jefeEquip the jefe equip
     *
     */
    public function _setJefeEquip($jefeEquip)
    {
        $this->jefeEquip = $jefeEquip;
    }

    /**
     * Gets the value of nomEscuderia.
     *
     * @return mixed
     */
    public function getNomEscuderia()
    {
        return $this->nomEscuderia;
    }

    /**
     * Sets the value of nomEscuderia.
     *
     * @param mixed $nomEscuderia the nom escuderia
     *
     */
    public function _setNomEscuderia($nomEscuderia)
    {
        $this->nomEscuderia = $nomEscuderia;
    }
}
?>