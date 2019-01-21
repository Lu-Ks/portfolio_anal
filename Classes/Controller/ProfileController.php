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
 * ProfileController
 */
class ProfileController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * profileRepository
     *
     * @var \ANAL\PortfolioAnal\Domain\Repository\ProfileRepository
     * @inject
     */
    protected $profileRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $profiles = $this->profileRepository->findAll();
        $this->view->assign('profiles', $profiles);
    }

    /**
     * action show
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Profile $profile
     * @return void
     */
    public function showAction(\ANAL\PortfolioAnal\Domain\Model\Profile $profile)
    {
        $this->view->assign('profile', $profile);
    }
}
