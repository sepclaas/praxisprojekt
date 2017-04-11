<?php
namespace Avonis\Praxisprojekclaas2\Controller;

/***
 *
 * This file is part of the "praxisprojekt1" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * SdController
 */
class SdController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * sdRepository
     *
     * @var \Avonis\Praxisprojekclaas2\Domain\Repository\SdRepository
     * @inject
     */
    protected $sdRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $sds = $this->sdRepository->findAll();
        $this->view->assign('sds', $sds);
    }
}
