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
 * Job
 */
class Job extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * poste
     *
     * @var string
     * @validate NotEmpty
     */
    protected $jobName = '';

    /**
     * Nom de la compagnie
     *
     * @var string
     * @validate NotEmpty
     */
    protected $companyName = '';

    /**
     * Description du poste
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * Date d'embauche
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateStart = null;

    /**
     * dateEnd
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateEnd = null;

    /**
     * Type de contrat
     *
     * @var int
     */
    protected $context = 0;

    /**
     * Lieu
     *
     * @var string
     * @validate NotEmpty
     */
    protected $location = '';

    /**
     * skills
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Skill>
     * @lazy
     */
    protected $skills = null;

    /**
     * Returns the jobName
     *
     * @return string $jobName
     */
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * Sets the jobName
     *
     * @param string $jobName
     * @return void
     */
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;
    }

    /**
     * Returns the companyName
     *
     * @return string $companyName
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets the companyName
     *
     * @param string $companyName
     * @return void
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the dateStart
     *
     * @return \DateTime $dateStart
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Sets the dateStart
     *
     * @param \DateTime $dateStart
     * @return void
     */
    public function setDateStart(\DateTime $dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * Returns the dateEnd
     *
     * @return \DateTime $dateEnd
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Sets the dateEnd
     *
     * @param \DateTime $dateEnd
     * @return void
     */
    public function setDateEnd(\DateTime $dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * Returns the context
     *
     * @return int $context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets the context
     *
     * @param int $context
     * @return void
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
        $this->skills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Skill
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\ANAL\PortfolioAnal\Domain\Model\Skill $skill)
    {
        $this->skills->attach($skill);
    }

    /**
     * Removes a Skill
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\ANAL\PortfolioAnal\Domain\Model\Skill $skillToRemove)
    {
        $this->skills->detach($skillToRemove);
    }

    /**
     * Returns the skills
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Skill> $skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Sets the skills
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ANAL\PortfolioAnal\Domain\Model\Skill> $skills
     * @return void
     */
    public function setSkills(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skills)
    {
        $this->skills = $skills;
    }
}
