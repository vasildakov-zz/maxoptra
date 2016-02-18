<?php
namespace VasilDakov\MaxOptra\Entity;

/**
 * Session
 *
 * @author  Vasil Dakov <vasildakov@gmail.com>
 * @package MaxOptra
 * @license http://www.opensource.org/licenses/mit-license.php
 */
class Session
{
   /**
    * @var string $id
    */
    private $_id;

    /**
     * @param string $id  The session ID
     */
    public function __construct($id)
    {
        $this->_id = $id;
    }

    /**
     * The session ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }
}
