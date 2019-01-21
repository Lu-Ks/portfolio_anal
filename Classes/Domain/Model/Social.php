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
 * Social
 */
class Social extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var int
     * @validate NotEmpty
     */
    protected $name = 0;

    /**
     * Identité
     *
     *
     * @var string
     * @validate NotEmpty
     */
    protected $identity = '';

    /**
     * Returns the name
     *
     * @return int $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param int $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the identity
     *
     * @return string $identity
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets the identity
     *
     * @param string $identity
     * @return void
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }
}
