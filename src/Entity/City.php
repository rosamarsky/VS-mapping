<?php

namespace Vs\Entity;

/**
 * City
 */
class City
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $countryId;

    /**
     * @var int
     */
    private $important;

    /**
     * @var int
     */
    private $regionId;

    /**
     * @var string
     */
    private $titleRu;

    /**
     * @var string
     */
    private $areaRu;

    /**
     * @var string
     */
    private $regionRu;

    /**
     * @var string
     */
    private $titleUa;

    /**
     * @var string
     */
    private $areaUa;

    /**
     * @var string
     */
    private $regionUa;

    /**
     * @var string
     */
    private $titleBe;

    /**
     * @var string
     */
    private $areaBe;

    /**
     * @var string
     */
    private $regionBe;

    /**
     * @var string
     */
    private $titleEn;

    /**
     * @var string
     */
    private $areaEn;

    /**
     * @var string
     */
    private $regionEn;

    /**
     * @var string
     */
    private $titleEs;

    /**
     * @var string
     */
    private $areaEs;

    /**
     * @var string
     */
    private $regionEs;

    /**
     * @var string
     */
    private $titlePt;

    /**
     * @var string
     */
    private $areaPt;

    /**
     * @var string
     */
    private $regionPt;

    /**
     * @var string
     */
    private $titleDe;

    /**
     * @var string
     */
    private $areaDe;

    /**
     * @var string
     */
    private $regionDe;

    /**
     * @var string
     */
    private $titleFr;

    /**
     * @var string
     */
    private $areaFr;

    /**
     * @var string
     */
    private $regionFr;

    /**
     * @var string
     */
    private $titleIt;

    /**
     * @var string
     */
    private $areaIt;

    /**
     * @var string
     */
    private $regionIt;

    /**
     * @var string
     */
    private $titlePl;

    /**
     * @var string
     */
    private $areaPl;

    /**
     * @var string
     */
    private $regionPl;

    /**
     * @var string
     */
    private $titleJa;

    /**
     * @var string
     */
    private $areaJa;

    /**
     * @var string
     */
    private $regionJa;

    /**
     * @var string
     */
    private $titleLt;

    /**
     * @var string
     */
    private $areaLt;

    /**
     * @var string
     */
    private $regionLt;

    /**
     * @var string
     */
    private $titleLv;

    /**
     * @var string
     */
    private $areaLv;

    /**
     * @var string
     */
    private $regionLv;

    /**
     * @var string
     */
    private $titleCz;

    /**
     * @var string
     */
    private $areaCz;

    /**
     * @var string
     */
    private $regionCz;

    /**
     * @var MetroStation[]
     */
    private $metroStations;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var Region
     */
    private $region;

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
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return City
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set important
     *
     * @param integer $important
     *
     * @return City
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Get important
     *
     * @return int
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * Set regionId
     *
     * @param integer $regionId
     *
     * @return City
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * Get regionId
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set titleRu
     *
     * @param string $titleRu
     *
     * @return City
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
     * Set areaRu
     *
     * @param string $areaRu
     *
     * @return City
     */
    public function setAreaRu($areaRu)
    {
        $this->areaRu = $areaRu;

        return $this;
    }

    /**
     * Get areaRu
     *
     * @return string
     */
    public function getAreaRu()
    {
        return $this->areaRu;
    }

    /**
     * Set regionRu
     *
     * @param string $regionRu
     *
     * @return City
     */
    public function setRegionRu($regionRu)
    {
        $this->regionRu = $regionRu;

        return $this;
    }

    /**
     * Get regionRu
     *
     * @return string
     */
    public function getRegionRu()
    {
        return $this->regionRu;
    }

    /**
     * Set titleUa
     *
     * @param string $titleUa
     *
     * @return City
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
     * Set areaUa
     *
     * @param string $areaUa
     *
     * @return City
     */
    public function setAreaUa($areaUa)
    {
        $this->areaUa = $areaUa;

        return $this;
    }

    /**
     * Get areaUa
     *
     * @return string
     */
    public function getAreaUa()
    {
        return $this->areaUa;
    }

    /**
     * Set regionUa
     *
     * @param string $regionUa
     *
     * @return City
     */
    public function setRegionUa($regionUa)
    {
        $this->regionUa = $regionUa;

        return $this;
    }

    /**
     * Get regionUa
     *
     * @return string
     */
    public function getRegionUa()
    {
        return $this->regionUa;
    }

    /**
     * Set titleBe
     *
     * @param string $titleBe
     *
     * @return City
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
     * Set areaBe
     *
     * @param string $areaBe
     *
     * @return City
     */
    public function setAreaBe($areaBe)
    {
        $this->areaBe = $areaBe;

        return $this;
    }

    /**
     * Get areaBe
     *
     * @return string
     */
    public function getAreaBe()
    {
        return $this->areaBe;
    }

    /**
     * Set regionBe
     *
     * @param string $regionBe
     *
     * @return City
     */
    public function setRegionBe($regionBe)
    {
        $this->regionBe = $regionBe;

        return $this;
    }

    /**
     * Get regionBe
     *
     * @return string
     */
    public function getRegionBe()
    {
        return $this->regionBe;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return City
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
     * Set areaEn
     *
     * @param string $areaEn
     *
     * @return City
     */
    public function setAreaEn($areaEn)
    {
        $this->areaEn = $areaEn;

        return $this;
    }

    /**
     * Get areaEn
     *
     * @return string
     */
    public function getAreaEn()
    {
        return $this->areaEn;
    }

    /**
     * Set regionEn
     *
     * @param string $regionEn
     *
     * @return City
     */
    public function setRegionEn($regionEn)
    {
        $this->regionEn = $regionEn;

        return $this;
    }

    /**
     * Get regionEn
     *
     * @return string
     */
    public function getRegionEn()
    {
        return $this->regionEn;
    }

    /**
     * Set titleEs
     *
     * @param string $titleEs
     *
     * @return City
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
     * Set areaEs
     *
     * @param string $areaEs
     *
     * @return City
     */
    public function setAreaEs($areaEs)
    {
        $this->areaEs = $areaEs;

        return $this;
    }

    /**
     * Get areaEs
     *
     * @return string
     */
    public function getAreaEs()
    {
        return $this->areaEs;
    }

    /**
     * Set regionEs
     *
     * @param string $regionEs
     *
     * @return City
     */
    public function setRegionEs($regionEs)
    {
        $this->regionEs = $regionEs;

        return $this;
    }

    /**
     * Get regionEs
     *
     * @return string
     */
    public function getRegionEs()
    {
        return $this->regionEs;
    }

    /**
     * Set titlePt
     *
     * @param string $titlePt
     *
     * @return City
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
     * Set areaPt
     *
     * @param string $areaPt
     *
     * @return City
     */
    public function setAreaPt($areaPt)
    {
        $this->areaPt = $areaPt;

        return $this;
    }

    /**
     * Get areaPt
     *
     * @return string
     */
    public function getAreaPt()
    {
        return $this->areaPt;
    }

    /**
     * Set regionPt
     *
     * @param string $regionPt
     *
     * @return City
     */
    public function setRegionPt($regionPt)
    {
        $this->regionPt = $regionPt;

        return $this;
    }

    /**
     * Get regionPt
     *
     * @return string
     */
    public function getRegionPt()
    {
        return $this->regionPt;
    }

    /**
     * Set titleDe
     *
     * @param string $titleDe
     *
     * @return City
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
     * Set areaDe
     *
     * @param string $areaDe
     *
     * @return City
     */
    public function setAreaDe($areaDe)
    {
        $this->areaDe = $areaDe;

        return $this;
    }

    /**
     * Get areaDe
     *
     * @return string
     */
    public function getAreaDe()
    {
        return $this->areaDe;
    }

    /**
     * Set regionDe
     *
     * @param string $regionDe
     *
     * @return City
     */
    public function setRegionDe($regionDe)
    {
        $this->regionDe = $regionDe;

        return $this;
    }

    /**
     * Get regionDe
     *
     * @return string
     */
    public function getRegionDe()
    {
        return $this->regionDe;
    }

    /**
     * Set titleFr
     *
     * @param string $titleFr
     *
     * @return City
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
     * Set areaFr
     *
     * @param string $areaFr
     *
     * @return City
     */
    public function setAreaFr($areaFr)
    {
        $this->areaFr = $areaFr;

        return $this;
    }

    /**
     * Get areaFr
     *
     * @return string
     */
    public function getAreaFr()
    {
        return $this->areaFr;
    }

    /**
     * Set regionFr
     *
     * @param string $regionFr
     *
     * @return City
     */
    public function setRegionFr($regionFr)
    {
        $this->regionFr = $regionFr;

        return $this;
    }

    /**
     * Get regionFr
     *
     * @return string
     */
    public function getRegionFr()
    {
        return $this->regionFr;
    }

    /**
     * Set titleIt
     *
     * @param string $titleIt
     *
     * @return City
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
     * Set areaIt
     *
     * @param string $areaIt
     *
     * @return City
     */
    public function setAreaIt($areaIt)
    {
        $this->areaIt = $areaIt;

        return $this;
    }

    /**
     * Get areaIt
     *
     * @return string
     */
    public function getAreaIt()
    {
        return $this->areaIt;
    }

    /**
     * Set regionIt
     *
     * @param string $regionIt
     *
     * @return City
     */
    public function setRegionIt($regionIt)
    {
        $this->regionIt = $regionIt;

        return $this;
    }

    /**
     * Get regionIt
     *
     * @return string
     */
    public function getRegionIt()
    {
        return $this->regionIt;
    }

    /**
     * Set titlePl
     *
     * @param string $titlePl
     *
     * @return City
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
     * Set areaPl
     *
     * @param string $areaPl
     *
     * @return City
     */
    public function setAreaPl($areaPl)
    {
        $this->areaPl = $areaPl;

        return $this;
    }

    /**
     * Get areaPl
     *
     * @return string
     */
    public function getAreaPl()
    {
        return $this->areaPl;
    }

    /**
     * Set regionPl
     *
     * @param string $regionPl
     *
     * @return City
     */
    public function setRegionPl($regionPl)
    {
        $this->regionPl = $regionPl;

        return $this;
    }

    /**
     * Get regionPl
     *
     * @return string
     */
    public function getRegionPl()
    {
        return $this->regionPl;
    }

    /**
     * Set titleJa
     *
     * @param string $titleJa
     *
     * @return City
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
     * Set areaJa
     *
     * @param string $areaJa
     *
     * @return City
     */
    public function setAreaJa($areaJa)
    {
        $this->areaJa = $areaJa;

        return $this;
    }

    /**
     * Get areaJa
     *
     * @return string
     */
    public function getAreaJa()
    {
        return $this->areaJa;
    }

    /**
     * Set regionJa
     *
     * @param string $regionJa
     *
     * @return City
     */
    public function setRegionJa($regionJa)
    {
        $this->regionJa = $regionJa;

        return $this;
    }

    /**
     * Get regionJa
     *
     * @return string
     */
    public function getRegionJa()
    {
        return $this->regionJa;
    }

    /**
     * Set titleLt
     *
     * @param string $titleLt
     *
     * @return City
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
     * Set areaLt
     *
     * @param string $areaLt
     *
     * @return City
     */
    public function setAreaLt($areaLt)
    {
        $this->areaLt = $areaLt;

        return $this;
    }

    /**
     * Get areaLt
     *
     * @return string
     */
    public function getAreaLt()
    {
        return $this->areaLt;
    }

    /**
     * Set regionLt
     *
     * @param string $regionLt
     *
     * @return City
     */
    public function setRegionLt($regionLt)
    {
        $this->regionLt = $regionLt;

        return $this;
    }

    /**
     * Get regionLt
     *
     * @return string
     */
    public function getRegionLt()
    {
        return $this->regionLt;
    }

    /**
     * Set titleLv
     *
     * @param string $titleLv
     *
     * @return City
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
     * Set areaLv
     *
     * @param string $areaLv
     *
     * @return City
     */
    public function setAreaLv($areaLv)
    {
        $this->areaLv = $areaLv;

        return $this;
    }

    /**
     * Get areaLv
     *
     * @return string
     */
    public function getAreaLv()
    {
        return $this->areaLv;
    }

    /**
     * Set regionLv
     *
     * @param string $regionLv
     *
     * @return City
     */
    public function setRegionLv($regionLv)
    {
        $this->regionLv = $regionLv;

        return $this;
    }

    /**
     * Get regionLv
     *
     * @return string
     */
    public function getRegionLv()
    {
        return $this->regionLv;
    }

    /**
     * Set titleCz
     *
     * @param string $titleCz
     *
     * @return City
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
     * Set areaCz
     *
     * @param string $areaCz
     *
     * @return City
     */
    public function setAreaCz($areaCz)
    {
        $this->areaCz = $areaCz;

        return $this;
    }

    /**
     * Get areaCz
     *
     * @return string
     */
    public function getAreaCz()
    {
        return $this->areaCz;
    }

    /**
     * Set regionCz
     *
     * @param string $regionCz
     *
     * @return City
     */
    public function setRegionCz($regionCz)
    {
        $this->regionCz = $regionCz;

        return $this;
    }

    /**
     * Get regionCz
     *
     * @return string
     */
    public function getRegionCz()
    {
        return $this->regionCz;
    }

    /**
     * @return MetroStation[]
     */
    public function getMetroStations()
    {
        return $this->metroStations;
    }

    /**
     * @param MetroStation[] $metroStation
     */
    public function addMetroStation($metroStation)
    {
        $this->metroStations[] = $metroStation;
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
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param Region $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }
}

