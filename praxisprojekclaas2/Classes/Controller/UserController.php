<?php
namespace Avonis\praxisprojekclaas2\Controller;

/**
 * UserController
 */

class UserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * userRepository
     *
     * @var \Avonis\praxisprojekclaas2\Domain\Repository\UserRepository
     * @inject
     */
    protected $userRepository;
    protected function initializeAction() {
        $this->userRepository =& t3lib_div::makeInstance('Tx_Extbase_Domain_Repository_FrontendUserRepository');
    }
}
?>