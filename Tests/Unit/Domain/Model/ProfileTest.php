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
class ProfileTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ANAL\PortfolioAnal\Domain\Model\Profile
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ANAL\PortfolioAnal\Domain\Model\Profile();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBirthDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBirthDate()
        );
    }

    /**
     * @test
     */
    public function setBirthDateForDateTimeSetsBirthDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'birthDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDrivingLicenseReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDrivingLicense()
        );
    }

    /**
     * @test
     */
    public function setDrivingLicenseForBoolSetsDrivingLicense()
    {
        $this->subject->setDrivingLicense(true);

        self::assertAttributeEquals(
            true,
            'drivingLicense',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );
    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );
    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProjectsReturnsInitialValueForProject()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProjects()
        );
    }

    /**
     * @test
     */
    public function setProjectsForObjectStorageContainingProjectSetsProjects()
    {
        $project = new \ANAL\PortfolioAnal\Domain\Model\Project();
        $objectStorageHoldingExactlyOneProjects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProjects->attach($project);
        $this->subject->setProjects($objectStorageHoldingExactlyOneProjects);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneProjects,
            'projects',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addProjectToObjectStorageHoldingProjects()
    {
        $project = new \ANAL\PortfolioAnal\Domain\Model\Project();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->addProject($project);
    }

    /**
     * @test
     */
    public function removeProjectFromObjectStorageHoldingProjects()
    {
        $project = new \ANAL\PortfolioAnal\Domain\Model\Project();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->removeProject($project);
    }

    /**
     * @test
     */
    public function getJobsReturnsInitialValueForJob()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getJobs()
        );
    }

    /**
     * @test
     */
    public function setJobsForObjectStorageContainingJobSetsJobs()
    {
        $job = new \ANAL\PortfolioAnal\Domain\Model\Job();
        $objectStorageHoldingExactlyOneJobs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneJobs->attach($job);
        $this->subject->setJobs($objectStorageHoldingExactlyOneJobs);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneJobs,
            'jobs',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addJobToObjectStorageHoldingJobs()
    {
        $job = new \ANAL\PortfolioAnal\Domain\Model\Job();
        $jobsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($job));
        $this->inject($this->subject, 'jobs', $jobsObjectStorageMock);

        $this->subject->addJob($job);
    }

    /**
     * @test
     */
    public function removeJobFromObjectStorageHoldingJobs()
    {
        $job = new \ANAL\PortfolioAnal\Domain\Model\Job();
        $jobsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($job));
        $this->inject($this->subject, 'jobs', $jobsObjectStorageMock);

        $this->subject->removeJob($job);
    }

    /**
     * @test
     */
    public function getSocialsReturnsInitialValueForSocial()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSocials()
        );
    }

    /**
     * @test
     */
    public function setSocialsForObjectStorageContainingSocialSetsSocials()
    {
        $social = new \ANAL\PortfolioAnal\Domain\Model\Social();
        $objectStorageHoldingExactlyOneSocials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSocials->attach($social);
        $this->subject->setSocials($objectStorageHoldingExactlyOneSocials);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSocials,
            'socials',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSocialToObjectStorageHoldingSocials()
    {
        $social = new \ANAL\PortfolioAnal\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->addSocial($social);
    }

    /**
     * @test
     */
    public function removeSocialFromObjectStorageHoldingSocials()
    {
        $social = new \ANAL\PortfolioAnal\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->removeSocial($social);
    }

    /**
     * @test
     */
    public function getTrainingReturnsInitialValueForTraining()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTraining()
        );
    }

    /**
     * @test
     */
    public function setTrainingForObjectStorageContainingTrainingSetsTraining()
    {
        $training = new \ANAL\PortfolioAnal\Domain\Model\Training();
        $objectStorageHoldingExactlyOneTraining = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTraining->attach($training);
        $this->subject->setTraining($objectStorageHoldingExactlyOneTraining);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTraining,
            'training',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTrainingToObjectStorageHoldingTraining()
    {
        $training = new \ANAL\PortfolioAnal\Domain\Model\Training();
        $trainingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trainingObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($training));
        $this->inject($this->subject, 'training', $trainingObjectStorageMock);

        $this->subject->addTraining($training);
    }

    /**
     * @test
     */
    public function removeTrainingFromObjectStorageHoldingTraining()
    {
        $training = new \ANAL\PortfolioAnal\Domain\Model\Training();
        $trainingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trainingObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($training));
        $this->inject($this->subject, 'training', $trainingObjectStorageMock);

        $this->subject->removeTraining($training);
    }
}
