<?php
namespace Avonis\Praxisprojekclaas2\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SdTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Avonis\Praxisprojekclaas2\Domain\Model\Sd
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Avonis\Praxisprojekclaas2\Domain\Model\Sd();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
    }

    /**
     * @test
     */
    public function getMontagReturnsInitialValueForUser()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMontag()
        );

    }

    /**
     * @test
     */
    public function setMontagForObjectStorageContainingUserSetsMontag()
    {
        $montag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $objectStorageHoldingExactlyOneMontag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMontag->attach($montag);
        $this->subject->setMontag($objectStorageHoldingExactlyOneMontag);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMontag,
            'montag',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMontagToObjectStorageHoldingMontag()
    {
        $montag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $montagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $montagObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($montag));
        $this->inject($this->subject, 'montag', $montagObjectStorageMock);

        $this->subject->addMontag($montag);
    }

    /**
     * @test
     */
    public function removeMontagFromObjectStorageHoldingMontag()
    {
        $montag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $montagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $montagObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($montag));
        $this->inject($this->subject, 'montag', $montagObjectStorageMock);

        $this->subject->removeMontag($montag);

    }

    /**
     * @test
     */
    public function getDienstagReturnsInitialValueForUser()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDienstag()
        );

    }

    /**
     * @test
     */
    public function setDienstagForObjectStorageContainingUserSetsDienstag()
    {
        $dienstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $objectStorageHoldingExactlyOneDienstag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDienstag->attach($dienstag);
        $this->subject->setDienstag($objectStorageHoldingExactlyOneDienstag);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDienstag,
            'dienstag',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addDienstagToObjectStorageHoldingDienstag()
    {
        $dienstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $dienstagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dienstagObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($dienstag));
        $this->inject($this->subject, 'dienstag', $dienstagObjectStorageMock);

        $this->subject->addDienstag($dienstag);
    }

    /**
     * @test
     */
    public function removeDienstagFromObjectStorageHoldingDienstag()
    {
        $dienstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $dienstagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dienstagObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($dienstag));
        $this->inject($this->subject, 'dienstag', $dienstagObjectStorageMock);

        $this->subject->removeDienstag($dienstag);

    }

    /**
     * @test
     */
    public function getMittwochReturnsInitialValueForUser()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMittwoch()
        );

    }

    /**
     * @test
     */
    public function setMittwochForObjectStorageContainingUserSetsMittwoch()
    {
        $mittwoch = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $objectStorageHoldingExactlyOneMittwoch = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMittwoch->attach($mittwoch);
        $this->subject->setMittwoch($objectStorageHoldingExactlyOneMittwoch);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMittwoch,
            'mittwoch',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMittwochToObjectStorageHoldingMittwoch()
    {
        $mittwoch = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $mittwochObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mittwochObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($mittwoch));
        $this->inject($this->subject, 'mittwoch', $mittwochObjectStorageMock);

        $this->subject->addMittwoch($mittwoch);
    }

    /**
     * @test
     */
    public function removeMittwochFromObjectStorageHoldingMittwoch()
    {
        $mittwoch = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $mittwochObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mittwochObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($mittwoch));
        $this->inject($this->subject, 'mittwoch', $mittwochObjectStorageMock);

        $this->subject->removeMittwoch($mittwoch);

    }

    /**
     * @test
     */
    public function getDonnerstagReturnsInitialValueForUser()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDonnerstag()
        );

    }

    /**
     * @test
     */
    public function setDonnerstagForObjectStorageContainingUserSetsDonnerstag()
    {
        $donnerstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $objectStorageHoldingExactlyOneDonnerstag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDonnerstag->attach($donnerstag);
        $this->subject->setDonnerstag($objectStorageHoldingExactlyOneDonnerstag);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDonnerstag,
            'donnerstag',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addDonnerstagToObjectStorageHoldingDonnerstag()
    {
        $donnerstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $donnerstagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $donnerstagObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($donnerstag));
        $this->inject($this->subject, 'donnerstag', $donnerstagObjectStorageMock);

        $this->subject->addDonnerstag($donnerstag);
    }

    /**
     * @test
     */
    public function removeDonnerstagFromObjectStorageHoldingDonnerstag()
    {
        $donnerstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $donnerstagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $donnerstagObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($donnerstag));
        $this->inject($this->subject, 'donnerstag', $donnerstagObjectStorageMock);

        $this->subject->removeDonnerstag($donnerstag);

    }

    /**
     * @test
     */
    public function getFreitagReturnsInitialValueForUser()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFreitag()
        );

    }

    /**
     * @test
     */
    public function setFreitagForObjectStorageContainingUserSetsFreitag()
    {
        $freitag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $objectStorageHoldingExactlyOneFreitag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFreitag->attach($freitag);
        $this->subject->setFreitag($objectStorageHoldingExactlyOneFreitag);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFreitag,
            'freitag',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addFreitagToObjectStorageHoldingFreitag()
    {
        $freitag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $freitagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $freitagObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($freitag));
        $this->inject($this->subject, 'freitag', $freitagObjectStorageMock);

        $this->subject->addFreitag($freitag);
    }

    /**
     * @test
     */
    public function removeFreitagFromObjectStorageHoldingFreitag()
    {
        $freitag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $freitagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $freitagObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($freitag));
        $this->inject($this->subject, 'freitag', $freitagObjectStorageMock);

        $this->subject->removeFreitag($freitag);

    }

    /**
     * @test
     */
    public function getSamstagReturnsInitialValueForUser()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSamstag()
        );

    }

    /**
     * @test
     */
    public function setSamstagForObjectStorageContainingUserSetsSamstag()
    {
        $samstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $objectStorageHoldingExactlyOneSamstag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSamstag->attach($samstag);
        $this->subject->setSamstag($objectStorageHoldingExactlyOneSamstag);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSamstag,
            'samstag',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSamstagToObjectStorageHoldingSamstag()
    {
        $samstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $samstagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $samstagObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($samstag));
        $this->inject($this->subject, 'samstag', $samstagObjectStorageMock);

        $this->subject->addSamstag($samstag);
    }

    /**
     * @test
     */
    public function removeSamstagFromObjectStorageHoldingSamstag()
    {
        $samstag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $samstagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $samstagObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($samstag));
        $this->inject($this->subject, 'samstag', $samstagObjectStorageMock);

        $this->subject->removeSamstag($samstag);

    }

    /**
     * @test
     */
    public function getSonntagReturnsInitialValueForUser()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSonntag()
        );

    }

    /**
     * @test
     */
    public function setSonntagForObjectStorageContainingUserSetsSonntag()
    {
        $sonntag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $objectStorageHoldingExactlyOneSonntag = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSonntag->attach($sonntag);
        $this->subject->setSonntag($objectStorageHoldingExactlyOneSonntag);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSonntag,
            'sonntag',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSonntagToObjectStorageHoldingSonntag()
    {
        $sonntag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $sonntagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sonntagObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($sonntag));
        $this->inject($this->subject, 'sonntag', $sonntagObjectStorageMock);

        $this->subject->addSonntag($sonntag);
    }

    /**
     * @test
     */
    public function removeSonntagFromObjectStorageHoldingSonntag()
    {
        $sonntag = new \Avonis\Praxisprojekclaas2\Domain\Model\User();
        $sonntagObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sonntagObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($sonntag));
        $this->inject($this->subject, 'sonntag', $sonntagObjectStorageMock);

        $this->subject->removeSonntag($sonntag);

    }
}
