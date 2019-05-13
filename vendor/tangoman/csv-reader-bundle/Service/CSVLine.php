<?php
/**
 * Copyright (c) 2018 Matthias Morin <matthias.morin@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace TangoMan\CSVReaderBundle\Service;

/**
 * Class CSVLine
 *
 * @package AppBundle\Service
 */
class CSVLine
{

    /**
     * @var array
     */
    private $line;

    /**
     * CSVLine constructor.
     *
     * @param $head
     * @param $line
     */
    public function __construct($head, $line)
    {
        foreach ($line as $index => $field) {
            $line[$index] = utf8_decode($field);
        }

        $this->line = array_combine($head, $line);
    }

    /**
     * @param $field
     *
     * @return array|string
     */
    public function get($field = null)
    {
        if (isset($this->line[$field])) {
            return trim($this->line[$field]);
        } elseif ($field === null) {
            return $this->line;
        }

        return false;
    }
}
