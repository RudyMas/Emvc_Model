<?php

namespace EasyMVC\Model;

/**
 * Class Repository
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2018, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.1.0.2
 * @package     EasyMVC\Model
 */
class Model
{
    private $data;

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