<?php

namespace Vs\Entity;

/**
 * Country
 */
class Country
{
    /**
     * @var int
     */
    private $id;

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
     * @var Region[]
     */
    private $regions;

    /**
     * @var City[]
     */
    private $cities;

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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Country
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
     * @return Region[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @param Region[] $region
     */
    public function addRegion($region)
    {
        $this->regions[] = $region;
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

