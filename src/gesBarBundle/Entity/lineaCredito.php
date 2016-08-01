<?php

namespace gesBarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lineaCredito
 *
 * @ORM\Table(name="linea_credito")
 * @ORM\Entity(repositoryClass="gesBarBundle\Repository\lineaCreditoRepository")
 */
class lineaCredito
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var array
     *
     * @ORM\Column(name="cuentas", type="array")
     */
    private $cuentas;


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
     * Set name
     *
     * @param string $name
     * @return lineaCredito
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return lineaCredito
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set cuentas
     *
     * @param array $cuentas
     * @return lineaCredito
     */
    public function setCuentas($cuentas)
    {
        $this->cuentas = $cuentas;

        return $this;
    }

    /**
     * Get cuentas
     *
     * @return array 
     */
    public function getCuentas()
    {
        return $this->cuentas;
    }
}
