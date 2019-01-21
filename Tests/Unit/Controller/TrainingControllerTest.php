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
class TrainingControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ANAL\PortfolioAnal\Controller\TrainingController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\ANAL\PortfolioAnal\Controller\TrainingController::class)
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
    public function listActionFetchesAllTrainingsFromRepositoryAndAssignsThemToView()
    {

        $allTrainings = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $trainingRepository = $this->getMockBuilder(\ANAL\PortfolioAnal\Domain\Repository\TrainingRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $trainingRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTrainings));
        $this->inject($this->subject, 'trainingRepository', $trainingRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('trainings', $allTrainings);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTrainingToView()
    {
        $training = new \ANAL\PortfolioAnal\Domain\Model\Training();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('training', $training);

        $this->subject->showAction($training);
    }
}
