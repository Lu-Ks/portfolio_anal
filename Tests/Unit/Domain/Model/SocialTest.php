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
class SocialTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ANAL\PortfolioAnal\Domain\Model\Social
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ANAL\PortfolioAnal\Domain\Model\Social();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForIntSetsName()
    {
        $this->subject->setName(12);

        self::assertAttributeEquals(
            12,
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIdentityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentity()
        );
    }

    /**
     * @test
     */
    public function setIdentityForStringSetsIdentity()
    {
        $this->subject->setIdentity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identity',
            $this->subject
        );
    }
}
