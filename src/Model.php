<?php

namespace EasyMVC\Model;

/**
 * Class Repository
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2018, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.0.1.1
 * @package     EasyMVC\Repository
 */
class Model
{
    /**
     * @param string $field
     * @return mixed
     */
    public function get(string $field)
    {
        return $this->$field;
    }
}