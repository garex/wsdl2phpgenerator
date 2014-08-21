<?php
/**
 * @package Wsdl2PhpGenerator
 */
namespace Wsdl2PhpGenerator;

/**
 * Simple but effective datatype to use instead of array
 *
 * @package Wsdl2PhpGenerator
 * @author Fredrik Wallgren <fredrik.wallgren@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class Variable
{
    /**
     * @var string The type
     */
    private $type;

    /**
     * @var string The name
     */
    private $name;

    /**
     * @var boolean Nillable
     */
    private $nillable;

    /**
     * @var string Description
     */
    private $description;

    /**
     * @param string $type
     * @param string $name
     * @param bool $nillable
     */
    public function __construct($type, $name, $nillable, $description = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->nillable = $nillable;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return boolean
     */
    public function getNillable()
    {
        return $this->nillable;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
