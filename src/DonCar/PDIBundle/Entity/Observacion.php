<?php

namespace DonCar\PDIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="observaciones")
 * @ORM\Entity
 *
*/
   class Observacion{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @ORM\Column(type="text", length=100)
	*/
	protected $texto;

  	/**
     	* @ORM\ManyToOne(targetEntity="Revision", inversedBy="observaciones")
     	* @ORM\JoinColumn(name="revision_id", referencedColumnName="id")
     	*/   
	protected $revision;

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
     * Set texto
     *
     * @param string $texto
     * @return Observacion
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set revision
     *
     * @param \DonCar\PDIBundle\Entity\Revision $revision
     * @return Observacion
     */
    public function setRevision(\DonCar\PDIBundle\Entity\Revision $revision = null)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * Get revision
     *
     * @return \DonCar\PDIBundle\Entity\Revision 
     */
    public function getRevision()
    {
        return $this->revision;
    }
}
