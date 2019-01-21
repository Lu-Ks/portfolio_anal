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
 * Formation
 */
class Training extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Domaine
     *
     * @var string
     * @validate NotEmpty
     */
    protected $domain = '';

    /**
     * Date de début
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateStart = null;

    /**
     * Date de fin
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateEnd = null;

    /**
     * Diplôme
     *
     * @var int
     */
    protected $degree = 0;

    /**
     * Place
     *
     * @var string
     * @validate NotEmpty
     */
    protected $location = '';

    /**
     * Intitulé
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Returns the domain
     *
     * @return string $domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets the domain
     *
     * @param string $domain
     * @return void
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
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
     * Returns the degree
     *
     * @return int $degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     *
     * @param int $degree
     * @return void
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
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
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
}
