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
class SkillControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ANAL\PortfolioAnal\Controller\SkillController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\ANAL\PortfolioAnal\Controller\SkillController::class)
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
    public function showActionAssignsTheGivenSkillToView()
    {
        $skill = new \ANAL\PortfolioAnal\Domain\Model\Skill();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('skill', $skill);

        $this->subject->showAction($skill);
    }
}
