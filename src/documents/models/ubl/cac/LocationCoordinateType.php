<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AltitudeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CoordinateSystemCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDegreesMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDirectionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeMinutesMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDegreesMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDirectionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeMinutesMeasure;

class LocationCoordinateType
{
    use HandlesObjectFlags;

    /**
     * @var CoordinateSystemCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CoordinateSystemCode")
     * @JMS\Expose
     * @JMS\SerializedName("CoordinateSystemCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCoordinateSystemCode", setter="setCoordinateSystemCode")
     */
    private $coordinateSystemCode;

    /**
     * @var LatitudeDegreesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDegreesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LatitudeDegreesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatitudeDegreesMeasure", setter="setLatitudeDegreesMeasure")
     */
    private $latitudeDegreesMeasure;

    /**
     * @var LatitudeMinutesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeMinutesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LatitudeMinutesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatitudeMinutesMeasure", setter="setLatitudeMinutesMeasure")
     */
    private $latitudeMinutesMeasure;

    /**
     * @var LatitudeDirectionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LatitudeDirectionCode")
     * @JMS\Expose
     * @JMS\SerializedName("LatitudeDirectionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatitudeDirectionCode", setter="setLatitudeDirectionCode")
     */
    private $latitudeDirectionCode;

    /**
     * @var LongitudeDegreesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDegreesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LongitudeDegreesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLongitudeDegreesMeasure", setter="setLongitudeDegreesMeasure")
     */
    private $longitudeDegreesMeasure;

    /**
     * @var LongitudeMinutesMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeMinutesMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LongitudeMinutesMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLongitudeMinutesMeasure", setter="setLongitudeMinutesMeasure")
     */
    private $longitudeMinutesMeasure;

    /**
     * @var LongitudeDirectionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LongitudeDirectionCode")
     * @JMS\Expose
     * @JMS\SerializedName("LongitudeDirectionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLongitudeDirectionCode", setter="setLongitudeDirectionCode")
     */
    private $longitudeDirectionCode;

    /**
     * @var AltitudeMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AltitudeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("AltitudeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAltitudeMeasure", setter="setAltitudeMeasure")
     */
    private $altitudeMeasure;

    /**
     * @return CoordinateSystemCode|null
     */
    public function getCoordinateSystemCode(): ?CoordinateSystemCode
    {
        return $this->coordinateSystemCode;
    }

    /**
     * @return CoordinateSystemCode
     */
    public function getCoordinateSystemCodeWithCreate(): CoordinateSystemCode
    {
        $this->coordinateSystemCode = is_null($this->coordinateSystemCode) ? new CoordinateSystemCode() : $this->coordinateSystemCode;

        return $this->coordinateSystemCode;
    }

    /**
     * @param CoordinateSystemCode|null $coordinateSystemCode
     * @return static
     */
    public function setCoordinateSystemCode(?CoordinateSystemCode $coordinateSystemCode = null): static
    {
        $this->coordinateSystemCode = $coordinateSystemCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCoordinateSystemCode(): static
    {
        $this->coordinateSystemCode = null;

        return $this;
    }

    /**
     * @return LatitudeDegreesMeasure|null
     */
    public function getLatitudeDegreesMeasure(): ?LatitudeDegreesMeasure
    {
        return $this->latitudeDegreesMeasure;
    }

    /**
     * @return LatitudeDegreesMeasure
     */
    public function getLatitudeDegreesMeasureWithCreate(): LatitudeDegreesMeasure
    {
        $this->latitudeDegreesMeasure = is_null($this->latitudeDegreesMeasure) ? new LatitudeDegreesMeasure() : $this->latitudeDegreesMeasure;

        return $this->latitudeDegreesMeasure;
    }

    /**
     * @param LatitudeDegreesMeasure|null $latitudeDegreesMeasure
     * @return static
     */
    public function setLatitudeDegreesMeasure(?LatitudeDegreesMeasure $latitudeDegreesMeasure = null): static
    {
        $this->latitudeDegreesMeasure = $latitudeDegreesMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLatitudeDegreesMeasure(): static
    {
        $this->latitudeDegreesMeasure = null;

        return $this;
    }

    /**
     * @return LatitudeMinutesMeasure|null
     */
    public function getLatitudeMinutesMeasure(): ?LatitudeMinutesMeasure
    {
        return $this->latitudeMinutesMeasure;
    }

    /**
     * @return LatitudeMinutesMeasure
     */
    public function getLatitudeMinutesMeasureWithCreate(): LatitudeMinutesMeasure
    {
        $this->latitudeMinutesMeasure = is_null($this->latitudeMinutesMeasure) ? new LatitudeMinutesMeasure() : $this->latitudeMinutesMeasure;

        return $this->latitudeMinutesMeasure;
    }

    /**
     * @param LatitudeMinutesMeasure|null $latitudeMinutesMeasure
     * @return static
     */
    public function setLatitudeMinutesMeasure(?LatitudeMinutesMeasure $latitudeMinutesMeasure = null): static
    {
        $this->latitudeMinutesMeasure = $latitudeMinutesMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLatitudeMinutesMeasure(): static
    {
        $this->latitudeMinutesMeasure = null;

        return $this;
    }

    /**
     * @return LatitudeDirectionCode|null
     */
    public function getLatitudeDirectionCode(): ?LatitudeDirectionCode
    {
        return $this->latitudeDirectionCode;
    }

    /**
     * @return LatitudeDirectionCode
     */
    public function getLatitudeDirectionCodeWithCreate(): LatitudeDirectionCode
    {
        $this->latitudeDirectionCode = is_null($this->latitudeDirectionCode) ? new LatitudeDirectionCode() : $this->latitudeDirectionCode;

        return $this->latitudeDirectionCode;
    }

    /**
     * @param LatitudeDirectionCode|null $latitudeDirectionCode
     * @return static
     */
    public function setLatitudeDirectionCode(?LatitudeDirectionCode $latitudeDirectionCode = null): static
    {
        $this->latitudeDirectionCode = $latitudeDirectionCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLatitudeDirectionCode(): static
    {
        $this->latitudeDirectionCode = null;

        return $this;
    }

    /**
     * @return LongitudeDegreesMeasure|null
     */
    public function getLongitudeDegreesMeasure(): ?LongitudeDegreesMeasure
    {
        return $this->longitudeDegreesMeasure;
    }

    /**
     * @return LongitudeDegreesMeasure
     */
    public function getLongitudeDegreesMeasureWithCreate(): LongitudeDegreesMeasure
    {
        $this->longitudeDegreesMeasure = is_null($this->longitudeDegreesMeasure) ? new LongitudeDegreesMeasure() : $this->longitudeDegreesMeasure;

        return $this->longitudeDegreesMeasure;
    }

    /**
     * @param LongitudeDegreesMeasure|null $longitudeDegreesMeasure
     * @return static
     */
    public function setLongitudeDegreesMeasure(?LongitudeDegreesMeasure $longitudeDegreesMeasure = null): static
    {
        $this->longitudeDegreesMeasure = $longitudeDegreesMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLongitudeDegreesMeasure(): static
    {
        $this->longitudeDegreesMeasure = null;

        return $this;
    }

    /**
     * @return LongitudeMinutesMeasure|null
     */
    public function getLongitudeMinutesMeasure(): ?LongitudeMinutesMeasure
    {
        return $this->longitudeMinutesMeasure;
    }

    /**
     * @return LongitudeMinutesMeasure
     */
    public function getLongitudeMinutesMeasureWithCreate(): LongitudeMinutesMeasure
    {
        $this->longitudeMinutesMeasure = is_null($this->longitudeMinutesMeasure) ? new LongitudeMinutesMeasure() : $this->longitudeMinutesMeasure;

        return $this->longitudeMinutesMeasure;
    }

    /**
     * @param LongitudeMinutesMeasure|null $longitudeMinutesMeasure
     * @return static
     */
    public function setLongitudeMinutesMeasure(?LongitudeMinutesMeasure $longitudeMinutesMeasure = null): static
    {
        $this->longitudeMinutesMeasure = $longitudeMinutesMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLongitudeMinutesMeasure(): static
    {
        $this->longitudeMinutesMeasure = null;

        return $this;
    }

    /**
     * @return LongitudeDirectionCode|null
     */
    public function getLongitudeDirectionCode(): ?LongitudeDirectionCode
    {
        return $this->longitudeDirectionCode;
    }

    /**
     * @return LongitudeDirectionCode
     */
    public function getLongitudeDirectionCodeWithCreate(): LongitudeDirectionCode
    {
        $this->longitudeDirectionCode = is_null($this->longitudeDirectionCode) ? new LongitudeDirectionCode() : $this->longitudeDirectionCode;

        return $this->longitudeDirectionCode;
    }

    /**
     * @param LongitudeDirectionCode|null $longitudeDirectionCode
     * @return static
     */
    public function setLongitudeDirectionCode(?LongitudeDirectionCode $longitudeDirectionCode = null): static
    {
        $this->longitudeDirectionCode = $longitudeDirectionCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLongitudeDirectionCode(): static
    {
        $this->longitudeDirectionCode = null;

        return $this;
    }

    /**
     * @return AltitudeMeasure|null
     */
    public function getAltitudeMeasure(): ?AltitudeMeasure
    {
        return $this->altitudeMeasure;
    }

    /**
     * @return AltitudeMeasure
     */
    public function getAltitudeMeasureWithCreate(): AltitudeMeasure
    {
        $this->altitudeMeasure = is_null($this->altitudeMeasure) ? new AltitudeMeasure() : $this->altitudeMeasure;

        return $this->altitudeMeasure;
    }

    /**
     * @param AltitudeMeasure|null $altitudeMeasure
     * @return static
     */
    public function setAltitudeMeasure(?AltitudeMeasure $altitudeMeasure = null): static
    {
        $this->altitudeMeasure = $altitudeMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAltitudeMeasure(): static
    {
        $this->altitudeMeasure = null;

        return $this;
    }
}
