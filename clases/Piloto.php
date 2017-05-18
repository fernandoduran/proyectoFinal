<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de la clase Usuario con los getters y
	 * setters para dar y recuperar valores de la
	 * tabla pilot
	*/

	class Piloto
	{
		private $id;
		private $nom;
		private $sigles;
		private $data_naixement;
		private $pes;
		private $altura;
		private $punts_totals;
		private $carreres_totals;
		private $primera_escuderia;
		private $nacionalitat;
		private $any_debut;
		private $total_voltes_rapides;
		private $victories;
		private $titols;


	
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
     * Gets the value of sigles.
     *
     * @return mixed
     */
    public function getSigles()
    {
        return $this->sigles;
    }

    /**
     * Sets the value of sigles.
     *
     * @param mixed $sigles the sigles
     *
     */
    public function _setSigles($sigles)
    {
        $this->sigles = $sigles;
    }

    /**
     * Gets the value of data_naixement.
     *
     * @return mixed
     */
    public function getDataNaixement()
    {
        return $this->data_naixement;
    }

    /**
     * Sets the value of data_naixement.
     *
     * @param mixed $data_naixement the data naixement
     *
     */
    public function _setDataNaixement($data_naixement)
    {
        $this->data_naixement = $data_naixement;
    }

    /**
     * Gets the value of pes.
     *
     * @return mixed
     */
    public function getPes()
    {
        return $this->pes;
    }

    /**
     * Sets the value of pes.
     *
     * @param mixed $pes the pes
     *
     */
    public function _setPes($pes)
    {
        $this->pes = $pes;
    }

    /**
     * Gets the value of altura.
     *
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Sets the value of altura.
     *
     * @param mixed $altura the altura
     *
     */
    public function _setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * Gets the value of punts_totals.
     *
     * @return mixed
     */
    public function getPuntsTotals()
    {
        return $this->punts_totals;
    }

    /**
     * Sets the value of punts_totals.
     *
     * @param mixed $punts_totals the punts totals
     *
     */
    public function _setPuntsTotals($punts_totals)
    {
        $this->punts_totals = $punts_totals;
    }

    /**
     * Gets the value of carreres_totals.
     *
     * @return mixed
     */
    public function getCarreresTotals()
    {
        return $this->carreres_totals;
    }

    /**
     * Sets the value of carreres_totals.
     *
     * @param mixed $carreres_totals the carreres totals
     *
     */
    public function _setCarreresTotals($carreres_totals)
    {
        $this->carreres_totals = $carreres_totals;
    }

    /**
     * Gets the value of primera_escuderia.
     *
     * @return mixed
     */
    public function getPrimeraEscuderia()
    {
        return $this->primera_escuderia;
    }

    /**
     * Sets the value of primera_escuderia.
     *
     * @param mixed $primera_escuderia the primera escuderia
     *
     */
    public function _setPrimeraEscuderia($primera_escuderia)
    {
        $this->primera_escuderia = $primera_escuderia;
    }

    /**
     * Gets the value of nacionalitat.
     *
     * @return mixed
     */
    public function getNacionalitat()
    {
        return $this->nacionalitat;
    }

    /**
     * Sets the value of nacionalitat.
     *
     * @param mixed $nacionalitat the nacionalitat
     *
     */
    public function _setNacionalitat($nacionalitat)
    {
        $this->nacionalitat = $nacionalitat;
    }

    /**
     * Gets the value of any_debut.
     *
     * @return mixed
     */
    public function getAnyDebut()
    {
        return $this->any_debut;
    }

    /**
     * Sets the value of any_debut.
     *
     * @param mixed $any_debut the any debut
     *
     */
    public function _setAnyDebut($any_debut)
    {
        $this->any_debut = $any_debut;
    }

    /**
     * Gets the value of total_voltes_rapides.
     *
     * @return mixed
     */
    public function getTotalVoltesRapides()
    {
        return $this->total_voltes_rapides;
    }

    /**
     * Sets the value of total_voltes_rapides.
     *
     * @param mixed $total_voltes_rapides the total voltes rapides
     *
     */
    public function _setTotalVoltesRapides($total_voltes_rapides)
    {
        $this->total_voltes_rapides = $total_voltes_rapides;
    }

    /**
     * Gets the value of victories.
     *
     * @return mixed
     */
    public function getVictories()
    {
        return $this->victories;
    }

    /**
     * Sets the value of victories.
     *
     * @param mixed $victories the victories
     *
     */
    public function _setVictories($victories)
    {
        $this->victories = $victories;
    }

    /**
     * Gets the value of titols.
     *
     * @return mixed
     */
    public function getTitols()
    {
        return $this->titols;
    }

    /**
     * Sets the value of titols.
     *
     * @param mixed $titols the titols
     *
     */
    public function _setTitols($titols)
    {
        $this->titols = $titols;
    }
}
?>