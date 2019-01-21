<?php
namespace ANAL\PortfolioAnal\Domain\Model;

/***
 *
 * This file is part of the "PortfolioANAL" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Aurélien SATGER <aurelien.satger@etu.u-bordeaux.fr>
 *           Nicolas TROCHUT <nicolas.trochut@etu.u-bordeaux.fr>
 *           Adrien CASSAR <adrien.cassar@etu.u-bordeaux.fr>
 *           Lucas CAUSSAT <lucas.caussat@etu.u-bordeaux.fr>
 *
 ***/

/**
 * Profil
 */
class Profile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $lastName = '';

    /**
     * Prénom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $firstName = '';

    /**
     * Date de naissance
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $birthDate = null;

    /**
     * Moyen de transport
     *
     * @var bool
     */
    protected $drivingLicense = false;

    /**
     * Numéro de téléphone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * Mail
     *
     * @var string
     */
    protected $email = '';

    /**
     * Adresse
     *
     * @var string
     */
    protected $address = '';

    /**
     * Photo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * projects
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Project>
     * @cascade remove
     * @lazy
     */
    protected $projects = null;

    /**
     * jobs
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Job>
     * @cascade remove
     * @lazy
     */
    protected $jobs = null;

    /**
     * socials
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Social>
     * @cascade remove
     * @lazy
     */
    protected $socials = null;

    /**
     * training
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Training>
     * @cascade remove
     * @lazy
     */
    protected $training = null;

    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the birthDate
     *
     * @return \DateTime $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets the birthDate
     *
     * @param \DateTime $birthDate
     * @return void
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns the drivingLicense
     *
     * @return bool $drivingLicense
     */
    public function getDrivingLicense()
    {
        return $this->drivingLicense;
    }

    /**
     * Sets the drivingLicense
     *
     * @param bool $drivingLicense
     * @return void
     */
    public function setDrivingLicense($drivingLicense)
    {
        $this->drivingLicense = $drivingLicense;
    }

    /**
     * Returns the boolean state of drivingLicense
     *
     * @return bool
     */
    public function isDrivingLicense()
    {
        return $this->drivingLicense;
    }

    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
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
        $this->projects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->jobs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->socials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->training = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Project
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Project $project
     * @return void
     */
    public function addProject(\ANAL\PortfolioAnal\Domain\Model\Project $project)
    {
        $this->projects->attach($project);
    }

    /**
     * Removes a Project
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Project $projectToRemove The Project to be removed
     * @return void
     */
    public function removeProject(\ANAL\PortfolioAnal\Domain\Model\Project $projectToRemove)
    {
        $this->projects->detach($projectToRemove);
    }

    /**
     * Returns the projects
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Project> $projects
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Sets the projects
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Project> $projects
     * @return void
     */
    public function setProjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Adds a Job
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Job $job
     * @return void
     */
    public function addJob(\ANAL\PortfolioAnal\Domain\Model\Job $job)
    {
        $this->jobs->attach($job);
    }

    /**
     * Removes a Job
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Job $jobToRemove The Job to be removed
     * @return void
     */
    public function removeJob(\ANAL\PortfolioAnal\Domain\Model\Job $jobToRemove)
    {
        $this->jobs->detach($jobToRemove);
    }

    /**
     * Returns the jobs
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Job> $jobs
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Sets the jobs
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Job> $jobs
     * @return void
     */
    public function setJobs(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $jobs)
    {
        $this->jobs = $jobs;
    }

    /**
     * Adds a Social
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Social $social
     * @return void
     */
    public function addSocial(\ANAL\PortfolioAnal\Domain\Model\Social $social)
    {
        $this->socials->attach($social);
    }

    /**
     * Removes a Social
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Social $socialToRemove The Social to be removed
     * @return void
     */
    public function removeSocial(\ANAL\PortfolioAnal\Domain\Model\Social $socialToRemove)
    {
        $this->socials->detach($socialToRemove);
    }

    /**
     * Returns the socials
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Social> $socials
     */
    public function getSocials()
    {
        return $this->socials;
    }

    /**
     * Sets the socials
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Social> $socials
     * @return void
     */
    public function setSocials(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $socials)
    {
        $this->socials = $socials;
    }

    /**
     * Adds a Training
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Training $training
     * @return void
     */
    public function addTraining(\ANAL\PortfolioAnal\Domain\Model\Training $training)
    {
        $this->training->attach($training);
    }

    /**
     * Removes a Training
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Training $trainingToRemove The Training to be removed
     * @return void
     */
    public function removeTraining(\ANAL\PortfolioAnal\Domain\Model\Training $trainingToRemove)
    {
        $this->training->detach($trainingToRemove);
    }

    /**
     * Returns the training
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Training> $training
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * Sets the training
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Training> $training
     * @return void
     */
    public function setTraining(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $training)
    {
        $this->training = $training;
    }
}
