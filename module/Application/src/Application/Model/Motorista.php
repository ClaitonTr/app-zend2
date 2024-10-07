<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motorista
 *
 * @ORM\Table(name="motorista", indexes={@ORM\Index(name="IDX_4106B9EEB1231B8E", columns={"veiculo"})})
 * @ORM\Entity
 */
class Motorista
{
    /**
     * @var int
     *
     * @ORM\Column(name="motorista_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="motorista_motorista_id_seq", allocationSize=1, initialValue=1)
     */
    private $motoristaId;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=200, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=20, nullable=false)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=11, nullable=false)
     */
    private $cpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefone", type="string", length=20, nullable=true)
     */
    private $telefone;

    /**
     * @var \Application\Model\Veiculo
     *
     * @ORM\ManyToOne(targetEntity="Application\Model\Veiculo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="veiculo", referencedColumnName="veiculo_id")
     * })
     */
    private $veiculo;

    public function getId()
    {
        return $this->motoristaId;
    }

    public function setId($motoristaId)
    {
        $this->motoristaId = $motoristaId;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getVeiculo()
    {
        return $this->veiculo;
    }

    public function setVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;
    }
}