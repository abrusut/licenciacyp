<?php
namespace STG\DEIM\Themes\Bundles\AplicativoBundle\Annotation;

/**
 * @Annotation
 */
class Filter
{

    public $type;
    public $source;
    public $label;
    public $options;
    public $class;
    public $className;
    public $classId;

    public function __construct(array $data)
    {
        $this->type = $data['type'];
        $this->source = isset($data['source']) ? $data['source'] : '';
        $this->label = isset($data['label']) ? $data['label'] : '';
        $this->options = isset($data['options']) ? $this->setSiNoOptions($data['options']) : null;
        $this->class = isset($data['class']) ? $data['class'] : null;
        $this->className = isset($data['className']) ? $data['className'] : null;
        $this->classId = isset($data['classId']) ? $data['classId'] : 'id';
    }

    private function setSiNoOptions($optionsArray)
    {
        if (count($optionsArray) != 2) {
            throw new \Exception('Mal uso de filtro Si_No, ' . 'Incorrecta cantidad de opciones');
        }
        
        return array(
            'si' => $optionsArray[0],
            'no' => $optionsArray[1]
        );
    }
}
