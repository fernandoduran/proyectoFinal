<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla temporada
	*/

	class Temporada
	{
		private $any;
		private $reglament;

	
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
     * Gets the value of reglament.
     *
     * @return mixed
     */
    public function getReglament()
    {
        return $this->reglament;
    }

    /**
     * Sets the value of reglament.
     *
     * @param mixed $reglament the reglament
     *
     */
    public function _setReglament($reglament)
    {
        $this->reglament = $reglament;
    }
}
?>