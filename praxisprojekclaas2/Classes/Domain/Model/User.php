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
 * User
 */
class User extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
{
    /**
     * feuseruid
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     */
    protected $feuseruid = null;

    /**
     * id
     *
     * @var int
     */
    protected $id = 0;

    /**
     * montag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd>
     * @cascade remove
     */
    protected $montag = null;

    /**
     * dienstag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd>
     * @cascade remove
     */
    protected $dienstag = null;

    /**
     * mittwoch
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd>
     * @cascade remove
     */
    protected $mittwoch = null;

    /**
     * donnerstag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd>
     * @cascade remove
     */
    protected $donnerstag = null;

    /**
     * freitag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd>
     * @cascade remove
     */
    protected $freitag = null;

    /**
     * samstag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd>
     * @cascade remove
     */
    protected $samstag = null;

    /**
     * sonntag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd>
     * @cascade remove
     */
    protected $sonntag = null;

    // GET and SET Methods
    /**
     * Returns the feuseruid
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser feuseruid
     */
    public function getFeuseruid()
    {
        return $this->feuseruid;
    }

    /*
     * Sets the feuseruid
     *
     * @param string $feuseruid
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser feuseruid
     */

    /**
     * @param $feuseruid
     */
    public function setFeuseruid($feuseruid)
    {
        $this->feuseruid = $feuseruid;
    }

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
     * Adds a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $montag
     * @return void
     */
    public function addMontag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $montag)
    {
        $this->montag->attach($montag);
    }

    /**
     * Removes a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $montagToRemove The Sd to be removed
     * @return void
     */
    public function removeMontag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $montagToRemove)
    {
        $this->montag->detach($montagToRemove);
    }

    /**
     * Returns the montag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $montag
     */
    public function getMontag()
    {
        return $this->montag;
    }

    /**
     * Sets the montag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $montag
     * @return void
     */
    public function setMontag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $montag)
    {
        $this->montag = $montag;
    }

    /**
     * Adds a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $dienstag
     * @return void
     */
    public function addDienstag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $dienstag)
    {
        $this->dienstag->attach($dienstag);
    }

    /**
     * Removes a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $dienstagToRemove The Sd to be removed
     * @return void
     */
    public function removeDienstag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $dienstagToRemove)
    {
        $this->dienstag->detach($dienstagToRemove);
    }

    /**
     * Returns the dienstag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $dienstag
     */
    public function getDienstag()
    {
        return $this->dienstag;
    }

    /**
     * Sets the dienstag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $dienstag
     * @return void
     */
    public function setDienstag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $dienstag)
    {
        $this->dienstag = $dienstag;
    }

    /**
     * Adds a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $mittwoch
     * @return void
     */
    public function addMittwoch(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $mittwoch)
    {
        $this->mittwoch->attach($mittwoch);
    }

    /**
     * Removes a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $mittwochToRemove The Sd to be removed
     * @return void
     */
    public function removeMittwoch(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $mittwochToRemove)
    {
        $this->mittwoch->detach($mittwochToRemove);
    }

    /**
     * Returns the mittwoch
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $mittwoch
     */
    public function getMittwoch()
    {
        return $this->mittwoch;
    }

    /**
     * Sets the mittwoch
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $mittwoch
     * @return void
     */
    public function setMittwoch(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $mittwoch)
    {
        $this->mittwoch = $mittwoch;
    }

    /**
     * Adds a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $donnerstag
     * @return void
     */
    public function addDonnerstag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $donnerstag)
    {
        $this->donnerstag->attach($donnerstag);
    }

    /**
     * Removes a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $donnerstagToRemove The Sd to be removed
     * @return void
     */
    public function removeDonnerstag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $donnerstagToRemove)
    {
        $this->donnerstag->detach($donnerstagToRemove);
    }

    /**
     * Returns the donnerstag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $donnerstag
     */
    public function getDonnerstag()
    {
        return $this->donnerstag;
    }

    /**
     * Sets the donnerstag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $donnerstag
     * @return void
     */
    public function setDonnerstag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $donnerstag)
    {
        $this->donnerstag = $donnerstag;
    }

    /**
     * Adds a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $freitag
     * @return void
     */
    public function addFreitag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $freitag)
    {
        $this->freitag->attach($freitag);
    }

    /**
     * Removes a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $freitagToRemove The Sd to be removed
     * @return void
     */
    public function removeFreitag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $freitagToRemove)
    {
        $this->freitag->detach($freitagToRemove);
    }

    /**
     * Returns the freitag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $freitag
     */
    public function getFreitag()
    {
        return $this->freitag;
    }

    /**
     * Sets the freitag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $freitag
     * @return void
     */
    public function setFreitag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $freitag)
    {
        $this->freitag = $freitag;
    }

    /**
     * Adds a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $samstag
     * @return void
     */
    public function addSamstag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $samstag)
    {
        $this->samstag->attach($samstag);
    }

    /**
     * Removes a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $samstagToRemove The Sd to be removed
     * @return void
     */
    public function removeSamstag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $samstagToRemove)
    {
        $this->samstag->detach($samstagToRemove);
    }

    /**
     * Returns the samstag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $samstag
     */
    public function getSamstag()
    {
        return $this->samstag;
    }

    /**
     * Sets the samstag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $samstag
     * @return void
     */
    public function setSamstag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $samstag)
    {
        $this->samstag = $samstag;
    }

    /**
     * Adds a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $sonntag
     * @return void
     */
    public function addSonntag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $sonntag)
    {
        $this->sonntag->attach($sonntag);
    }

    /**
     * Removes a Sd
     *
     * @param \Avonis\Praxisprojekclaas2\Domain\Model\Sd $sonntagToRemove The Sd to be removed
     * @return void
     */
    public function removeSonntag(\Avonis\Praxisprojekclaas2\Domain\Model\Sd $sonntagToRemove)
    {
        $this->sonntag->detach($sonntagToRemove);
    }

    /**
     * Returns the sonntag
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $sonntag
     */
    public function getSonntag()
    {
        return $this->sonntag;
    }

    /**
     * Sets the sonntag
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Avonis\Praxisprojekclaas2\Domain\Model\Sd> $sonntag
     * @return void
     */
    public function setSonntag(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sonntag)
    {
        $this->sonntag = $sonntag;
    }
}
