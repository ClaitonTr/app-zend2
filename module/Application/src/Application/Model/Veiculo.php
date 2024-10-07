<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veiculo
 *
 * @ORM\Table(name="veiculo")
 * @ORM\Entity
 */
class Veiculo
{
    /**
     * @var int
     *
     * @ORM\Column(name="veiculo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="veiculo_veiculo_id_seq", allocationSize=1, initialValue=1)
     */
    private $veiculoId;

    /**
     * @var string
     *
     * @ORM\Column(name="placa", type="string", length=7, nullable=false)
     */
    private $placa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="renavam", type="string", length=30, nullable=true)
     */
    private $renavam;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=20, nullable=false)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=20, nullable=false)
     */
    private $marca;

    /**
     * @var int
     *
     * @ORM\Column(name="ano", type="integer", nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="cor", type="string", length=20, nullable=false)
     */
    private $cor;

    public function getId()
    {
        return $this->veiculoId;
    }

    public function setId($veiculoId)
    {
        $this->veiculoId = $veiculoId;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function getRenavam()
    {
        return $this->renavam;
    }

    public function setRenavam($renavam)
    {
        $this->renavam = $renavam;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }
}