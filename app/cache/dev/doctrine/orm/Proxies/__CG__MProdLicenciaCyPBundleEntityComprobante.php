<?php

namespace Proxies\__CG__\MProd\LicenciaCyPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Comprobante extends \MProd\LicenciaCyPBundle\Entity\Comprobante implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'id', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'monto', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'recargoSegundoVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'recargoPrimerVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'clienteSap', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'letraServicio', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'rendicionNumero', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'fechaPago', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'primerVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'segundoVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'numeroCodigoBarra', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'createdAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'id', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'monto', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'recargoSegundoVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'recargoPrimerVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'clienteSap', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'letraServicio', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'rendicionNumero', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'fechaPago', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'primerVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'segundoVencimiento', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'numeroCodigoBarra', '' . "\0" . 'MProd\\LicenciaCyPBundle\\Entity\\Comprobante' . "\0" . 'createdAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Comprobante $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonto($monto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonto', [$monto]);

        return parent::setMonto($monto);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonto', []);

        return parent::getMonto();
    }

    /**
     * {@inheritDoc}
     */
    public function setRendicionNumero($rendicionNumero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRendicionNumero', [$rendicionNumero]);

        return parent::setRendicionNumero($rendicionNumero);
    }

    /**
     * {@inheritDoc}
     */
    public function getRendicionNumero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRendicionNumero', []);

        return parent::getRendicionNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaPago($fechaPago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaPago', [$fechaPago]);

        return parent::setFechaPago($fechaPago);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaPago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaPago', []);

        return parent::getFechaPago();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaVencimiento($fechaVencimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaVencimiento', [$fechaVencimiento]);

        return parent::setFechaVencimiento($fechaVencimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaVencimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaVencimiento', []);

        return parent::getFechaVencimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAtValue', []);

        return parent::setCreatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setClienteSap($clienteSap)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClienteSap', [$clienteSap]);

        return parent::setClienteSap($clienteSap);
    }

    /**
     * {@inheritDoc}
     */
    public function getClienteSap()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClienteSap', []);

        return parent::getClienteSap();
    }

    /**
     * {@inheritDoc}
     */
    public function setLetraServicio($letraServicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLetraServicio', [$letraServicio]);

        return parent::setLetraServicio($letraServicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getLetraServicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLetraServicio', []);

        return parent::getLetraServicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimerVencimiento($primerVencimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimerVencimiento', [$primerVencimiento]);

        return parent::setPrimerVencimiento($primerVencimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimerVencimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimerVencimiento', []);

        return parent::getPrimerVencimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegundoVencimiento($segundoVencimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegundoVencimiento', [$segundoVencimiento]);

        return parent::setSegundoVencimiento($segundoVencimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegundoVencimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegundoVencimiento', []);

        return parent::getSegundoVencimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroCodigoBarra($numeroCodigoBarra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroCodigoBarra', [$numeroCodigoBarra]);

        return parent::setNumeroCodigoBarra($numeroCodigoBarra);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroCodigoBarra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroCodigoBarra', []);

        return parent::getNumeroCodigoBarra();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecargoSegundoVencimiento($recargoSegundoVencimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecargoSegundoVencimiento', [$recargoSegundoVencimiento]);

        return parent::setRecargoSegundoVencimiento($recargoSegundoVencimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecargoSegundoVencimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecargoSegundoVencimiento', []);

        return parent::getRecargoSegundoVencimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecargoPrimerVencimiento($recargoPrimerVencimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecargoPrimerVencimiento', [$recargoPrimerVencimiento]);

        return parent::setRecargoPrimerVencimiento($recargoPrimerVencimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecargoPrimerVencimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecargoPrimerVencimiento', []);

        return parent::getRecargoPrimerVencimiento();
    }

}
