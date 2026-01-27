<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

final class DatiSAL
{
    use HandlesObjectFlags;

    /**
     * @translation-german Referenz Fase
     *
     * @JMS\Expose
     * @JMS\Groups({"fatturapa"})
     * @JMS\Type("int")
     * @JMS\Accessor(getter="getRiferimentoFase", setter="setRiferimentoFase")
     * @JMS\SerializedName("RiferimentoFase")
     * @JMS\XmlElement(cdata=false)
     */
    private ?int $riferimentoFase = null;

    /**
     * @translation-german Referenz Fase
     *
     * @return null|int
     */
    public function getRiferimentoFase(): ?int
    {
        return $this->riferimentoFase;
    }

    /**
     * @translation-german Referenz Fase
     *
     * @param  null|int $riferimentoFase
     * @return static
     */
    public function setRiferimentoFase(
        ?int $riferimentoFase = null
    ): static {
        $this->riferimentoFase = $riferimentoFase;

        return $this;
    }

    /**
     * @translation-german Referenz Fase
     *
     * @return static
     */
    public function unsetRiferimentoFase(): static
    {
        $this->riferimentoFase = null;

        return $this;
    }
}
