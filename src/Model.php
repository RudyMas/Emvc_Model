<?php

namespace EasyMVC;

/**
 * Class Model (PHP version 7.2)
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2018-2020, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     1.0.1.0
 * @package     EasyMVC
 */
class Model
{
    private $data;

    /**
     * Model constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->data[$key] = $value;
        }
    }

    /**
     * @param string $key
     * @param $value
     */
    public function setData(string $key, $value): void
    {
        $this->data[$key] = $value;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getData(string $key)
    {
        return $this->data[$key];
    }
}
