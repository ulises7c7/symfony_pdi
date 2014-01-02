<?php

namespace DonCar\PDIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="revisiones")
 * @ORM\Entity
 *
*/
   class Revision{

	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	/**
	* @ORM\Column(type="boolean")
	*/
	protected $aprobado;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $color;

	/**
	* @Assert\NotBlank()
	* @Assert\Type("\DateTime")
	*/
	/**
	* @ORM\Column(type="datetime")
	*/
	protected $fechaRevision;

	/**
	* @ORM\Column(type="datetime")
	*/
	protected $fechaSolicitud;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $gror;

	/**
	* @ORM\Column(type="boolean")
	*/
	protected $notificado;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $numeroChasis;

	/**
	* @ORM\Column(type="string", length=100)
	*/	
	protected $pvta;

	/**
	* @ORM\Column(type="string", length=100)
	*/	
	protected $unidad;

	/**
	* @ORM\ManyToOne(targetEntity="Usuario")
	* @ORM\JoinColumn(name="revisor_id", referencedColumnName="id")
	*/
	protected $revisor;

	/**
	* @ORM\ManyToOne(targetEntity="Usuario")
	* @ORM\JoinColumn(name="solicitante_id", referencedColumnName="id")
	*/
	protected $solicitante;


	/**
	* @ORM\ManyToOne(targetEntity="TipoRevision")
	* @ORM\JoinColumn(name="tipo_revision_id", referencedColumnName="id")
	*/
	protected $tipoRevision;

	 /**
     	* @ORM\OneToMany(targetEntity="Observacion", mappedBy="revision")
     	*/
	protected $observaciones;



	public function __construct(){
		$this->observaciones = new ArrayCollection();
	}


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set aprobado
     *
     * @param boolean $aprobado
     * @return Revision
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;

        return $this;
    }

    /**
     * Get aprobado
     *
     * @return boolean 
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Revision
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set fechaRevision
     *
     * @param \DateTime $fechaRevision
     * @return Revision
     */
    public function setFechaRevision($fechaRevision)
    {
        $this->fechaRevision = $fechaRevision;

        return $this;
    }

    /**
     * Get fechaRevision
     *
     * @return \DateTime 
     */
    public function getFechaRevision()
    {
        return $this->fechaRevision;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return Revision
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud
     *
     * @return \DateTime 
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set gror
     *
     * @param string $gror
     * @return Revision
     */
    public function setGror($gror)
    {
        $this->gror = $gror;

        return $this;
    }

    /**
     * Get gror
     *
     * @return string 
     */
    public function getGror()
    {
        return $this->gror;
    }

    /**
     * Set notificado
     *
     * @param boolean $notificado
     * @return Revision
     */
    public function setNotificado($notificado)
    {
        $this->notificado = $notificado;

        return $this;
    }

    /**
     * Get notificado
     *
     * @return boolean 
     */
    public function getNotificado()
    {
        return $this->notificado;
    }

    /**
     * Set numeroChasis
     *
     * @param string $numeroChasis
     * @return Revision
     */
    public function setNumeroChasis($numeroChasis)
    {
        $this->numeroChasis = $numeroChasis;

        return $this;
    }

    /**
     * Get numeroChasis
     *
     * @return string 
     */
    public function getNumeroChasis()
    {
        return $this->numeroChasis;
    }

    /**
     * Set pvta
     *
     * @param string $pvta
     * @return Revision
     */
    public function setPvta($pvta)
    {
        $this->pvta = $pvta;

        return $this;
    }

    /**
     * Get pvta
     *
     * @return string 
     */
    public function getPvta()
    {
        return $this->pvta;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return Revision
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set tipoRevision
     *
     * @param \DonCar\PDIBundle\Entity\TipoRevision $tipoRevision
     * @return Revision
     */
    public function setTipoRevision(\DonCar\PDIBundle\Entity\TipoRevision $tipoRevision = null)
    {
        $this->tipoRevision = $tipoRevision;

        return $this;
    }

    /**
     * Get tipoRevision
     *
     * @return \DonCar\PDIBundle\Entity\TipoRevision 
     */
    public function getTipoRevision()
    {
        return $this->tipoRevision;
    }

    /**
     * Set revisor
     *
     * @param \DonCar\PDIBundle\Entity\Usuario $revisor
     * @return Revision
     */
    public function setRevisor(\DonCar\PDIBundle\Entity\Usuario $revisor = null)
    {
        $this->revisor = $revisor;

        return $this;
    }

    /**
     * Get revisor
     *
     * @return \DonCar\PDIBundle\Entity\Usuario 
     */
    public function getRevisor()
    {
        return $this->revisor;
    }

    /**
     * Set solicitante
     *
     * @param \DonCar\PDIBundle\Entity\Usuario $solicitante
     * @return Revision
     */
    public function setSolicitante(\DonCar\PDIBundle\Entity\Usuario $solicitante = null)
    {
        $this->solicitante = $solicitante;

        return $this;
    }

    /**
     * Get solicitante
     *
     * @return \DonCar\PDIBundle\Entity\Usuario 
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }

    /**
     * Add observaciones
     *
     * @param \DonCar\PDIBundle\Entity\Observacion $observaciones
     * @return Revision
     */
    public function addObservacione(\DonCar\PDIBundle\Entity\Observacion $observaciones)
    {
        $this->observaciones[] = $observaciones;

        return $this;
    }

    /**
     * Remove observaciones
     *
     * @param \DonCar\PDIBundle\Entity\Observacion $observaciones
     */
    public function removeObservacione(\DonCar\PDIBundle\Entity\Observacion $observaciones)
    {
        $this->observaciones->removeElement($observaciones);
    }

    /**
     * Get observaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
