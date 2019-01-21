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
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * projectRepository
     *
     * @var \ANAL\PortfolioAnal\Domain\Repository\ProjectRepository
     * @inject
     */
    protected $projectRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);
    }

    /**
     * action show
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Project $project
     * @return void
     */
    public function showAction(\ANAL\PortfolioAnal\Domain\Model\Project $project)
    {
        $this->view->assign('project', $project);
    }

    /**
     * action highlight
     *
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action skills
     *
     * @return void
     */
    public function skillsAction()
    {

    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
