<?php

namespace Vs\Entity;

/**
 * Region
 */
class Region
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var City[]
     */
    private $cities;

    /**
     * @var string
     */
    private $titleRu;

    /**
     * @var string
     */
    private $titleUa;

    /**
     * @var string
     */
    private $titleBe;

    /**
     * @var string
     */
    private $titleEn;

    /**
     * @var string
     */
    private $titleEs;

    /**
     * @var string
     */
    private $titlePt;

    /**
     * @var string
     */
    private $titleDe;

    /**
     * @var string
     */
    private $titleFr;

    /**
     * @var string
     */
    private $titleIt;

    /**
     * @var string
     */
    private $titlePl;

    /**
     * @var string
     */
    private $titleJa;

    /**
     * @var string
     */
    private $titleLt;

    /**
     * @var string
     */
    private $titleLv;

    /**
     * @var string
     */
    private $titleCz;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titleRu
     *
     * @param string $titleRu
     *
     * @return Region
     */
    public function setTitleRu($titleRu)
    {
        $this->titleRu = $titleRu;

        return $this;
    }

    /**
     * Get titleRu
     *
     * @return string
     */
    public function getTitleRu()
    {
        return $this->titleRu;
    }

    /**
     * Set titleUa
     *
     * @param string $titleUa
     *
     * @return Region
     */
    public function setTitleUa($titleUa)
    {
        $this->titleUa = $titleUa;

        return $this;
    }

    /**
     * Get titleUa
     *
     * @return string
     */
    public function getTitleUa()
    {
        return $this->titleUa;
    }

    /**
     * Set titleBe
     *
     * @param string $titleBe
     *
     * @return Region
     */
    public function setTitleBe($titleBe)
    {
        $this->titleBe = $titleBe;

        return $this;
    }

    /**
     * Get titleBe
     *
     * @return string
     */
    public function getTitleBe()
    {
        return $this->titleBe;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return Region
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Set titleEs
     *
     * @param string $titleEs
     *
     * @return Region
     */
    public function setTitleEs($titleEs)
    {
        $this->titleEs = $titleEs;

        return $this;
    }

    /**
     * Get titleEs
     *
     * @return string
     */
    public function getTitleEs()
    {
        return $this->titleEs;
    }

    /**
     * Set titlePt
     *
     * @param string $titlePt
     *
     * @return Region
     */
    public function setTitlePt($titlePt)
    {
        $this->titlePt = $titlePt;

        return $this;
    }

    /**
     * Get titlePt
     *
     * @return string
     */
    public function getTitlePt()
    {
        return $this->titlePt;
    }

    /**
     * Set titleDe
     *
     * @param string $titleDe
     *
     * @return Region
     */
    public function setTitleDe($titleDe)
    {
        $this->titleDe = $titleDe;

        return $this;
    }

    /**
     * Get titleDe
     *
     * @return string
     */
    public function getTitleDe()
    {
        return $this->titleDe;
    }

    /**
     * Set titleFr
     *
     * @param string $titleFr
     *
     * @return Region
     */
    public function setTitleFr($titleFr)
    {
        $this->titleFr = $titleFr;

        return $this;
    }

    /**
     * Get titleFr
     *
     * @return string
     */
    public function getTitleFr()
    {
        return $this->titleFr;
    }

    /**
     * Set titleIt
     *
     * @param string $titleIt
     *
     * @return Region
     */
    public function setTitleIt($titleIt)
    {
        $this->titleIt = $titleIt;

        return $this;
    }

    /**
     * Get titleIt
     *
     * @return string
     */
    public function getTitleIt()
    {
        return $this->titleIt;
    }

    /**
     * Set titlePl
     *
     * @param string $titlePl
     *
     * @return Region
     */
    public function setTitlePl($titlePl)
    {
        $this->titlePl = $titlePl;

        return $this;
    }

    /**
     * Get titlePl
     *
     * @return string
     */
    public function getTitlePl()
    {
        return $this->titlePl;
    }

    /**
     * Set titleJa
     *
     * @param string $titleJa
     *
     * @return Region
     */
    public function setTitleJa($titleJa)
    {
        $this->titleJa = $titleJa;

        return $this;
    }

    /**
     * Get titleJa
     *
     * @return string
     */
    public function getTitleJa()
    {
        return $this->titleJa;
    }

    /**
     * Set titleLt
     *
     * @param string $titleLt
     *
     * @return Region
     */
    public function setTitleLt($titleLt)
    {
        $this->titleLt = $titleLt;

        return $this;
    }

    /**
     * Get titleLt
     *
     * @return string
     */
    public function getTitleLt()
    {
        return $this->titleLt;
    }

    /**
     * Set titleLv
     *
     * @param string $titleLv
     *
     * @return Region
     */
    public function setTitleLv($titleLv)
    {
        $this->titleLv = $titleLv;

        return $this;
    }

    /**
     * Get titleLv
     *
     * @return string
     */
    public function getTitleLv()
    {
        return $this->titleLv;
    }

    /**
     * Set titleCz
     *
     * @param string $titleCz
     *
     * @return Region
     */
    public function setTitleCz($titleCz)
    {
        $this->titleCz = $titleCz;

        return $this;
    }

    /**
     * Get titleCz
     *
     * @return string
     */
    public function getTitleCz()
    {
        return $this->titleCz;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return City[]
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param City[] $city
     */
    public function addCity($city)
    {
        $this->cities[] = $city;
    }
}

