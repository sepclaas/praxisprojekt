<?php
namespace Avonis\Praxisprojekclaas2\Domain\Model;

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
 * Sd
 */
class Sd extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * id
     *
     * @var int
     */
    protected $id = 0;

    /**
     * montag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User>
     * @cascade remove
     */
    protected $montag = null;

    /**
     * dienstag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User>
     * @cascade remove
     */
    protected $dienstag = null;

    /**
     * mittwoch
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User>
     * @cascade remove
     */
    protected $mittwoch = null;

    /**
     * donnerstag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User>
     * @cascade remove
     */
    protected $donnerstag = null;

    /**
     * freitag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User>
     * @cascade remove
     */
    protected $freitag = null;

    /**
     * samstag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User>
     * @cascade remove
     */
    protected $samstag = null;

    /**
     * sonntag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User>
     * @cascade remove
     */
    protected $sonntag = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->montag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->dienstag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->mittwoch = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->donnerstag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->freitag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->samstag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->sonntag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Adds a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $montag
     * @return void
     */
    public function addMontag(\Avonis\Praxisprojekclaas2\Domain\Model\User $montag)
    {
        $this->montag->attach($montag);
    }

    /**
     * Removes a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $montagToRemove The User to be removed
     * @return void
     */
    public function removeMontag(\Avonis\Praxisprojekclaas2\Domain\Model\User $montagToRemove)
    {
        $this->montag->detach($montagToRemove);
    }

    /**
     * Returns the montag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $montag
     */
    public function getMontag()
    {
        return $this->montag;
    }

    /**
     * Sets the montag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $montag
     * @return void
     */
    public function setMontag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $montag)
    {
        $this->montag = $montag;
    }

    /**
     * Adds a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $dienstag
     * @return void
     */
    public function addDienstag(\Avonis\Praxisprojekclaas2\Domain\Model\User $dienstag)
    {
        $this->dienstag->attach($dienstag);
    }

    /**
     * Removes a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $dienstagToRemove The User to be removed
     * @return void
     */
    public function removeDienstag(\Avonis\Praxisprojekclaas2\Domain\Model\User $dienstagToRemove)
    {
        $this->dienstag->detach($dienstagToRemove);
    }

    /**
     * Returns the dienstag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $dienstag
     */
    public function getDienstag()
    {
        return $this->dienstag;
    }

    /**
     * Sets the dienstag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $dienstag
     * @return void
     */
    public function setDienstag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $dienstag)
    {
        $this->dienstag = $dienstag;
    }

    /**
     * Adds a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $mittwoch
     * @return void
     */
    public function addMittwoch(\Avonis\Praxisprojekclaas2\Domain\Model\User $mittwoch)
    {
        $this->mittwoch->attach($mittwoch);
    }

    /**
     * Removes a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $mittwochToRemove The User to be removed
     * @return void
     */
    public function removeMittwoch(\Avonis\Praxisprojekclaas2\Domain\Model\User $mittwochToRemove)
    {
        $this->mittwoch->detach($mittwochToRemove);
    }

    /**
     * Returns the mittwoch
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $mittwoch
     */
    public function getMittwoch()
    {
        return $this->mittwoch;
    }

    /**
     * Sets the mittwoch
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $mittwoch
     * @return void
     */
    public function setMittwoch(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $mittwoch)
    {
        $this->mittwoch = $mittwoch;
    }

    /**
     * Adds a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $donnerstag
     * @return void
     */
    public function addDonnerstag(\Avonis\Praxisprojekclaas2\Domain\Model\User $donnerstag)
    {
        $this->donnerstag->attach($donnerstag);
    }

    /**
     * Removes a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $donnerstagToRemove The User to be removed
     * @return void
     */
    public function removeDonnerstag(\Avonis\Praxisprojekclaas2\Domain\Model\User $donnerstagToRemove)
    {
        $this->donnerstag->detach($donnerstagToRemove);
    }

    /**
     * Returns the donnerstag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $donnerstag
     */
    public function getDonnerstag()
    {
        return $this->donnerstag;
    }

    /**
     * Sets the donnerstag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $donnerstag
     * @return void
     */
    public function setDonnerstag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $donnerstag)
    {
        $this->donnerstag = $donnerstag;
    }

    /**
     * Adds a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $freitag
     * @return void
     */
    public function addFreitag(\Avonis\Praxisprojekclaas2\Domain\Model\User $freitag)
    {
        $this->freitag->attach($freitag);
    }

    /**
     * Removes a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $freitagToRemove The User to be removed
     * @return void
     */
    public function removeFreitag(\Avonis\Praxisprojekclaas2\Domain\Model\User $freitagToRemove)
    {
        $this->freitag->detach($freitagToRemove);
    }

    /**
     * Returns the freitag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $freitag
     */
    public function getFreitag()
    {
        return $this->freitag;
    }

    /**
     * Sets the freitag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $freitag
     * @return void
     */
    public function setFreitag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $freitag)
    {
        $this->freitag = $freitag;
    }

    /**
     * Adds a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $samstag
     * @return void
     */
    public function addSamstag(\Avonis\Praxisprojekclaas2\Domain\Model\User $samstag)
    {
        $this->samstag->attach($samstag);
    }

    /**
     * Removes a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $samstagToRemove The User to be removed
     * @return void
     */
    public function removeSamstag(\Avonis\Praxisprojekclaas2\Domain\Model\User $samstagToRemove)
    {
        $this->samstag->detach($samstagToRemove);
    }

    /**
     * Returns the samstag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $samstag
     */
    public function getSamstag()
    {
        return $this->samstag;
    }

    /**
     * Sets the samstag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $samstag
     * @return void
     */
    public function setSamstag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $samstag)
    {
        $this->samstag = $samstag;
    }

    /**
     * Adds a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $sonntag
     * @return void
     */
    public function addSonntag(\Avonis\Praxisprojekclaas2\Domain\Model\User $sonntag)
    {
        $this->sonntag->attach($sonntag);
    }

    /**
     * Removes a User
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\User $sonntagToRemove The User to be removed
     * @return void
     */
    public function removeSonntag(\Avonis\Praxisprojekclaas2\Domain\Model\User $sonntagToRemove)
    {
        $this->sonntag->detach($sonntagToRemove);
    }

    /**
     * Returns the sonntag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $sonntag
     */
    public function getSonntag()
    {
        return $this->sonntag;
    }

    /**
     * Sets the sonntag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\User> $sonntag
     * @return void
     */
    public function setSonntag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sonntag)
    {
        $this->sonntag = $sonntag;
    }
}
