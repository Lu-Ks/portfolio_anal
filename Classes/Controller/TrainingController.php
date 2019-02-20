<?php
namespace ANAL\PortfolioAnal\Controller;

use ANAL\PortfolioAnal\Domain\UseCase\Query\TrainingSearch;

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
 * TrainingController
 */
class TrainingController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * trainingRepository
     *
     * @var \ANAL\PortfolioAnal\Domain\Repository\TrainingRepository
     * @inject
     */
    protected $trainingRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $trainings = $this->trainingRepository->findAll();
        $this->view->assign('trainings', $trainings);
    }

    /**
     * action show
     *
     * @param \ANAL\PortfolioAnal\Domain\Model\Training $training
     * @return void
     */
    public function showAction(\ANAL\PortfolioAnal\Domain\Model\Training $training)
    {
        $this->view->assign('training', $training);
    }

    /**
     * @param \ANAL\PortfolioAnal\Domain\UseCase\Query\TrainingSearch $search
     */
    public function searchAction()
    {

    }
}
