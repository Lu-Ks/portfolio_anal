<?php
namespace ANAL\PortfolioAnal\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Aurélien SATGER <aurelien.satger@etu.u-bordeaux.fr>
 * @author Nicolas TROCHUT <nicolas.trochut@etu.u-bordeaux.fr>
 * @author Adrien CASSAR <adrien.cassar@etu.u-bordeaux.fr>
 * @author Lucas CAUSSAT <lucas.caussat@etu.u-bordeaux.fr>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ANAL\PortfolioAnal\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ANAL\PortfolioAnal\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
