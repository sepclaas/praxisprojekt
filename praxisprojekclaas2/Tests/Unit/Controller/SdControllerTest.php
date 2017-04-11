<?php
namespace Avonis\Praxisprojekclaas2\Tests\Unit\Controller;

/**
 * Test case.
 */
class SdControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Avonis\Praxisprojekclaas2\Controller\SdController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Avonis\Praxisprojekclaas2\Controller\SdController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSdsFromRepositoryAndAssignsThemToView()
    {

        $allSds = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sdRepository = $this->getMockBuilder(\Avonis\Praxisprojekclaas2\Domain\Repository\SdRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sdRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSds));
        $this->inject($this->subject, 'sdRepository', $sdRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sds', $allSds);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
