<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla producte
	*/
	class Producto
	{
		private $id;
		private $nom;
		private $descripcio;
		private $preu;
		private $stock;


		
	
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

        return $this;
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
     * Gets the value of descripcio.
     *
     * @return mixed
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Sets the value of descripcio.
     *
     * @param mixed $descripcio the descripcio
     *
     * @return self
     */
    public function _setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;
    }

    /**
     * Gets the value of preu.
     *
     * @return mixed
     */
    public function getPreu()
    {
        return $this->preu;
    }

    /**
     * Sets the value of preu.
     *
     * @param mixed $preu the preu
     *
     * @return self
     */
    public function _setPreu($preu)
    {
        $this->preu = $preu;
    }

    /**
     * Gets the value of stock.
     *
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets the value of stock.
     *
     * @param mixed $stock the stock
     *
     * @return self
     */
    public function _setStock($stock)
    {
        $this->stock = $stock;
    }
}
?>