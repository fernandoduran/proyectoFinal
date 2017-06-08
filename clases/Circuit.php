<?php

	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla circuit
	*/

	class Circuit
	{
		private $id;
		private $nom;
		private $pais;
		private $ciutat;
		private $longitud;
		private $curves;
		private $zones_activacio_DRS;
		private $zones_deteccio_DRS;
		private $voltes;


	
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
     */
    public function _setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Gets the value of pais.
     *
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Sets the value of pais.
     *
     * @param mixed $pais the pais
     *
     */
    public function _setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * Gets the value of ciutat.
     *
     * @return mixed
     */
    public function getCiutat()
    {
        return $this->ciutat;
    }

    /**
     * Sets the value of ciutat.
     *
     * @param mixed $ciutat the ciutat
     *
     */
    public function _setCiutat($ciutat)
    {
        $this->ciutat = $ciutat;
    }

    /**
     * Gets the value of longitud.
     *
     * @return mixed
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Sets the value of longitud.
     *
     * @param mixed $longitud the longitud
     *
     */
    public function _setLongitud($longitud)
    {
        $this->longitud = $longitud;
    }

    /**
     * Gets the value of curves.
     *
     * @return mixed
     */
    public function getCurves()
    {
        return $this->curves;
    }

    /**
     * Sets the value of curves.
     *
     * @param mixed $curves the curves
     *
     */
    public function _setCurves($curves)
    {
        $this->curves = $curves;
    }

    /**
     * Gets the value of zones_activacio_DRS.
     *
     * @return mixed
     */
    public function getZonesActivacioDRS()
    {
        return $this->zones_activacio_DRS;
    }

    /**
     * Sets the value of zones_activacio_DRS.
     *
     * @param mixed $zones_activacio_DRS the zones activacio
     *
     */
    public function _setZonesActivacioDRS($zones_activacio_DRS)
    {
        $this->zones_activacio_DRS = $zones_activacio_DRS;
    }

    /**
     * Gets the value of zones_deteccio_DRS.
     *
     * @return mixed
     */
    public function getZonesDeteccioDRS()
    {
        return $this->zones_deteccio_DRS;
    }

    /**
     * Sets the value of zones_deteccio_DRS.
     *
     * @param mixed $zones_deteccio_DRS the zones deteccio
     *
     */
    public function _setZonesDeteccioDRS($zones_deteccio_DRS)
    {
        $this->zones_deteccio_DRS = $zones_deteccio_DRS;
    }

    /**
     * Gets the value of voltes.
     *
     * @return mixed
     */
    public function getVoltes()
    {
        return $this->voltes;
    }

    /**
     * Sets the value of voltes.
     *
     * @param mixed $voltes the voltes
     *
     */
    public function _setVoltes($voltes)
    {
        $this->voltes = $voltes;
    }
}
?>