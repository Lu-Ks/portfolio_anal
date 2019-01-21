<?php
namespace ANAL\PortfolioAnal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Aurélien SATGER <aurelien.satger@etu.u-bordeaux.fr>
 * @author Nicolas TROCHUT <nicolas.trochut@etu.u-bordeaux.fr>
 * @author Adrien CASSAR <adrien.cassar@etu.u-bordeaux.fr>
 * @author Lucas CAUSSAT <lucas.caussat@etu.u-bordeaux.fr>
 */
class ProfileControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ANAL\PortfolioAnal\Controller\ProfileController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\ANAL\PortfolioAnal\Controller\ProfileController::class)
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
    public function listActionFetchesAllProfilesFromRepositoryAndAssignsThemToView()
    {

        $allProfiles = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $profileRepository = $this->getMockBuilder(\ANAL\PortfolioAnal\Domain\Repository\ProfileRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $profileRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProfiles));
        $this->inject($this->subject, 'profileRepository', $profileRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('profiles', $allProfiles);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProfileToView()
    {
        $profile = new \ANAL\PortfolioAnal\Domain\Model\Profile();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('profile', $profile);

        $this->subject->showAction($profile);
    }
}
