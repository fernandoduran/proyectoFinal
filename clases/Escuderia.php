<?php 
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla scuderia
	*/

	class Escuderia
	{
		private $id;
		private $nomEscuderia;
		private $seu;
		private $debut;


	
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

    /**
     * Gets the value of seu.
     *
     * @return mixed
     */
    public function getSeu()
    {
        return $this->seu;
    }

    /**
     * Sets the value of seu.
     *
     * @param mixed $seu the seu
     *
     */
    public function _setSeu($seu)
    {
        $this->seu = $seu;
    }

    /**
     * Gets the value of debut.
     *
     * @return mixed
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Sets the value of debut.
     *
     * @param mixed $debut the debut
     *
     */
    public function _setDebut($debut)
    {
        $this->debut = $debut;
    }
}
?>