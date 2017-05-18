<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla carrito
	*/
	class Carrito
	{
		
		private $id;
		private $log_user_id;
		private $preuTotal;
		private $dataCompra;


	
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
     */
    public function _setId($id)
    {
        $this->id = $id;
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
     */
    public function _setLogUserId($log_user_id)
    {
        $this->log_user_id = $log_user_id;
    }

    /**
     * Gets the value of preuTotal.
     *
     * @return mixed
     */
    public function getPreuTotal()
    {
        return $this->preuTotal;
    }

    /**
     * Sets the value of preuTotal.
     *
     * @param mixed $preuTotal the preu total
     */
    public function _setPreuTotal($preuTotal)
    {
        $this->preuTotal = $preuTotal;
    }

    /**
     * Gets the value of dataCompra.
     *
     * @return mixed
     */
    public function getDataCompra()
    {
        return $this->dataCompra;
    }

    /**
     * Sets the value of dataCompra.
     *
     * @param mixed $dataCompra the data compra
     */
    public function _setDataCompra($dataCompra)
    {
        $this->dataCompra = $dataCompra;

        return $this;
    }
}
?>