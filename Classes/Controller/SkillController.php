<?php
namespace ANAL\PortfolioAnal\Controller;

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
 * SkillController
 */
class SkillController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * skillRepository
     *
     * @var \ANAL\PortfolioAnal\Domain\Repository\SkillRepository
     * @inject
     */
    protected $skillRepository = null;

    /**
     * action show
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Skill $skill
     * @return void
     */
    public function showAction(\ANAL\PortfolioAnal\Domain\Model\Skill $skill)
    {
        $this->view->assign('skill', $skill);
    }
}
