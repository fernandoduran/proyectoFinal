<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla carrera
	*/

	class Carrera
	{
		private $id;
		private $nom_carrera;
		private $data_carrera;
		private $circuit_id;


	
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
     * Gets the value of nom_carrera.
     *
     * @return mixed
     */
    public function getNomCarrera()
    {
        return $this->nom_carrera;
    }

    /**
     * Sets the value of nom_carrera.
     *
     * @param mixed $nom_carrera the nom carrera
     *
     */
    public function _setNomCarrera($nom_carrera)
    {
        $this->nom_carrera = $nom_carrera;
    }

    /**
     * Gets the value of data_carrera.
     *
     * @return mixed
     */
    public function getDataCarrera()
    {
        return $this->data_carrera;
    }

    /**
     * Sets the value of data_carrera.
     *
     * @param mixed $data_carrera the data carrera
     *
     */
    public function _setDataCarrera($data_carrera)
    {
        $this->data_carrera = $data_carrera;
    }

    /**
     * Gets the value of circuit_id.
     *
     * @return mixed
     */
    public function getCircuitId()
    {
        return $this->circuit_id;
    }

    /**
     * Sets the value of circuit_id.
     *
     * @param mixed $circuit_id the circuit id
     *
     */
    public function _setCircuitId($circuit_id)
    {
        $this->circuit_id = $circuit_id;
    }
}
?>