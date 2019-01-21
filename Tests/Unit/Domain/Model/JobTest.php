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
class JobTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ANAL\PortfolioAnal\Domain\Model\Job
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ANAL\PortfolioAnal\Domain\Model\Job();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getJobNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getJobName()
        );
    }

    /**
     * @test
     */
    public function setJobNameForStringSetsJobName()
    {
        $this->subject->setJobName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'jobName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCompanyNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCompanyName()
        );
    }

    /**
     * @test
     */
    public function setCompanyNameForStringSetsCompanyName()
    {
        $this->subject->setCompanyName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'companyName',
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

    /**
     * @test
     */
    public function getDateStartReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateStart()
        );
    }

    /**
     * @test
     */
    public function setDateStartForDateTimeSetsDateStart()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateStart($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateStart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateEnd()
        );
    }

    /**
     * @test
     */
    public function setDateEndForDateTimeSetsDateEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateEnd',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContextReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getContext()
        );
    }

    /**
     * @test
     */
    public function setContextForIntSetsContext()
    {
        $this->subject->setContext(12);

        self::assertAttributeEquals(
            12,
            'context',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocation()
        );
    }

    /**
     * @test
     */
    public function setLocationForStringSetsLocation()
    {
        $this->subject->setLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'location',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSkillsReturnsInitialValueForSkill()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSkills()
        );
    }

    /**
     * @test
     */
    public function setSkillsForObjectStorageContainingSkillSetsSkills()
    {
        $skill = new \ANAL\PortfolioAnal\Domain\Model\Skill();
        $objectStorageHoldingExactlyOneSkills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSkills->attach($skill);
        $this->subject->setSkills($objectStorageHoldingExactlyOneSkills);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSkills,
            'skills',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSkillToObjectStorageHoldingSkills()
    {
        $skill = new \ANAL\PortfolioAnal\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->addSkill($skill);
    }

    /**
     * @test
     */
    public function removeSkillFromObjectStorageHoldingSkills()
    {
        $skill = new \ANAL\PortfolioAnal\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->removeSkill($skill);
    }
}
