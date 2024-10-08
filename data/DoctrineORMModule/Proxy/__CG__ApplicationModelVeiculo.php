<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Veiculo extends \Application\Model\Veiculo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'veiculoId', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'placa', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'renavam', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'modelo', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'marca', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'ano', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'cor'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'veiculoId', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'placa', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'renavam', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'modelo', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'marca', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'ano', '' . "\0" . 'Application\\Model\\Veiculo' . "\0" . 'cor'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Veiculo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($veiculoId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$veiculoId]);

        return parent::setId($veiculoId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaca', []);

        return parent::getPlaca();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaca($placa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaca', [$placa]);

        return parent::setPlaca($placa);
    }

    /**
     * {@inheritDoc}
     */
    public function getRenavam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRenavam', []);

        return parent::getRenavam();
    }

    /**
     * {@inheritDoc}
     */
    public function setRenavam($renavam)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRenavam', [$renavam]);

        return parent::setRenavam($renavam);
    }

    /**
     * {@inheritDoc}
     */
    public function getModelo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelo', []);

        return parent::getModelo();
    }

    /**
     * {@inheritDoc}
     */
    public function setModelo($modelo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModelo', [$modelo]);

        return parent::setModelo($modelo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarca', []);

        return parent::getMarca();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarca($marca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarca', [$marca]);

        return parent::setMarca($marca);
    }

    /**
     * {@inheritDoc}
     */
    public function getAno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAno', []);

        return parent::getAno();
    }

    /**
     * {@inheritDoc}
     */
    public function setAno($ano)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAno', [$ano]);

        return parent::setAno($ano);
    }

    /**
     * {@inheritDoc}
     */
    public function getCor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCor', []);

        return parent::getCor();
    }

    /**
     * {@inheritDoc}
     */
    public function setCor($cor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCor', [$cor]);

        return parent::setCor($cor);
    }

}
