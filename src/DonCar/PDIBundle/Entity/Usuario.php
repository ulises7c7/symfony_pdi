<?php

namespace DonCar\PDIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 *
*/

class Usuario{

	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

  	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $username;
	
	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $password;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $nombre;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $apellido;

	/**
	* @ORM\ManyToOne(targetEntity="TipoUsuario")
	* @ORM\JoinColumn(name="tipo_usuario_id", referencedColumnName="id")
	*/
	protected $tipoUsuario;

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
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set tipoUsuario
     *
     * @param \DonCar\PDIBundle\Entity\TipoUsuario $tipoUsuario
     * @return Usuario
     */
    public function setTipoUsuario(\DonCar\PDIBundle\Entity\TipoUsuario $tipoUsuario = null)
    {
        $this->tipoUsuario = $tipoUsuario;

        return $this;
    }

    /**
     * Get tipoUsuario
     *
     * @return \DonCar\PDIBundle\Entity\TipoUsuario 
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }
}
