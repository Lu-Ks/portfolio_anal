<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 28/01/2019
 * Time: 17:28
 */

namespace ANAL\PortfolioAnal\Domain\UseCase\Query;


class TrainingSearch
{
    /**
     * @var string
     */
    private $keyword = '';
    /**
     * @var int
     */
    private $domain = 0;
    /**
     * @var int
     */
    private $degree = 0;
    /**
     * @var DateTime
     */
    protected $started_date = null;
    /**
     * @var DateTime
     */
    protected $finished_date = null;
    /**
     * @var string
     */
    protected $location = "";


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return int
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param int $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return int
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * @param int $degree
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * @return DateTime
     */
    public function getStartedDate()
    {
        return $this->started_date;
    }

    /**
     * @param DateTime $started_date
     */
    public function setStartedDate($started_date)
    {
        $this->started_date = $started_date;
    }

    /**
     * @return DateTime
     */
    public function getFinishedDate()
    {
        return $this->finished_date;
    }

    /**
     * @param DateTime $finished_date
     */
    public function setFinishedDate($finished_date)
    {
        $this->finished_date = $finished_date;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}