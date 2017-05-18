<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla carrito_has_products
	*/

	class CarritoProducto
	{
		
		private $carrito_id;
		private $producte_id;
		private $quantitat;


	
    /**
     * Gets the value of carrito_id.
     *
     * @return mixed
     */
    public function getCarritoId()
    {
        return $this -> carrito_id;
    }

    /**
     * Sets the value of carrito_id.
     *
     * @param mixed $carrito_id the carrito id
     */
    public function _setCarritoId($carrito_id)
    {
        $this -> carrito_id = $carrito_id;
    }

    /**
     * Gets the value of producte_id.
     *
     * @return mixed
     */
    public function getProducteId()
    {
        return $this -> producte_id;
    }

    /**
     * Sets the value of producte_id.
     *
     * @param mixed $producte_id the producte id
     */
    public function _setProducteId($producte_id)
    {
        $this -> producte_id = $producte_id;
    }

    /**
     * Gets the value of quantitat.
     *
     * @return mixed
     */
    public function getQuantitat()
    {
        return $this->quantitat;
    }

    /**
     * Sets the value of quantitat.
     *
     * @param mixed $quantitat the quantitat
     */
    public function _setQuantitat($quantitat)
    {
        $this -> quantitat = $quantitat;
    }
}
?>