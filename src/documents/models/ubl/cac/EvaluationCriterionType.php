<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EvaluationCriterionTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Expression;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ExpressionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdQuantity;

class EvaluationCriterionType
{
    use HandlesObjectFlags;

    /**
     * @var EvaluationCriterionTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EvaluationCriterionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("EvaluationCriterionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEvaluationCriterionTypeCode", setter="setEvaluationCriterionTypeCode")
     */
    private $evaluationCriterionTypeCode;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var ThresholdAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdAmount")
     * @JMS\Expose
     * @JMS\SerializedName("ThresholdAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThresholdAmount", setter="setThresholdAmount")
     */
    private $thresholdAmount;

    /**
     * @var ThresholdQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ThresholdQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ThresholdQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThresholdQuantity", setter="setThresholdQuantity")
     */
    private $thresholdQuantity;

    /**
     * @var ExpressionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ExpressionCode")
     * @JMS\Expose
     * @JMS\SerializedName("ExpressionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExpressionCode", setter="setExpressionCode")
     */
    private $expressionCode;

    /**
     * @var array<Expression>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Expression>")
     * @JMS\Expose
     * @JMS\SerializedName("Expression")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Expression", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getExpression", setter="setExpression")
     */
    private $expression;

    /**
     * @var DurationPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DurationPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("DurationPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDurationPeriod", setter="setDurationPeriod")
     */
    private $durationPeriod;

    /**
     * @var array<SuggestedEvidence>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SuggestedEvidence>")
     * @JMS\Expose
     * @JMS\SerializedName("SuggestedEvidence")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SuggestedEvidence", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSuggestedEvidence", setter="setSuggestedEvidence")
     */
    private $suggestedEvidence;

    /**
     * @return EvaluationCriterionTypeCode|null
     */
    public function getEvaluationCriterionTypeCode(): ?EvaluationCriterionTypeCode
    {
        return $this->evaluationCriterionTypeCode;
    }

    /**
     * @return EvaluationCriterionTypeCode
     */
    public function getEvaluationCriterionTypeCodeWithCreate(): EvaluationCriterionTypeCode
    {
        $this->evaluationCriterionTypeCode = is_null($this->evaluationCriterionTypeCode) ? new EvaluationCriterionTypeCode() : $this->evaluationCriterionTypeCode;

        return $this->evaluationCriterionTypeCode;
    }

    /**
     * @param EvaluationCriterionTypeCode|null $evaluationCriterionTypeCode
     * @return static
     */
    public function setEvaluationCriterionTypeCode(
        ?EvaluationCriterionTypeCode $evaluationCriterionTypeCode = null,
    ): static {
        $this->evaluationCriterionTypeCode = $evaluationCriterionTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEvaluationCriterionTypeCode(): static
    {
        $this->evaluationCriterionTypeCode = null;

        return $this;
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return static
     */
    public function setDescription(?array $description = null): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDescription(): static
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDescription(): static
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addToDescription(Description $description): static
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addOnceToDescription(Description $description): static
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return ThresholdAmount|null
     */
    public function getThresholdAmount(): ?ThresholdAmount
    {
        return $this->thresholdAmount;
    }

    /**
     * @return ThresholdAmount
     */
    public function getThresholdAmountWithCreate(): ThresholdAmount
    {
        $this->thresholdAmount = is_null($this->thresholdAmount) ? new ThresholdAmount() : $this->thresholdAmount;

        return $this->thresholdAmount;
    }

    /**
     * @param ThresholdAmount|null $thresholdAmount
     * @return static
     */
    public function setThresholdAmount(?ThresholdAmount $thresholdAmount = null): static
    {
        $this->thresholdAmount = $thresholdAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetThresholdAmount(): static
    {
        $this->thresholdAmount = null;

        return $this;
    }

    /**
     * @return ThresholdQuantity|null
     */
    public function getThresholdQuantity(): ?ThresholdQuantity
    {
        return $this->thresholdQuantity;
    }

    /**
     * @return ThresholdQuantity
     */
    public function getThresholdQuantityWithCreate(): ThresholdQuantity
    {
        $this->thresholdQuantity = is_null($this->thresholdQuantity) ? new ThresholdQuantity() : $this->thresholdQuantity;

        return $this->thresholdQuantity;
    }

    /**
     * @param ThresholdQuantity|null $thresholdQuantity
     * @return static
     */
    public function setThresholdQuantity(?ThresholdQuantity $thresholdQuantity = null): static
    {
        $this->thresholdQuantity = $thresholdQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetThresholdQuantity(): static
    {
        $this->thresholdQuantity = null;

        return $this;
    }

    /**
     * @return ExpressionCode|null
     */
    public function getExpressionCode(): ?ExpressionCode
    {
        return $this->expressionCode;
    }

    /**
     * @return ExpressionCode
     */
    public function getExpressionCodeWithCreate(): ExpressionCode
    {
        $this->expressionCode = is_null($this->expressionCode) ? new ExpressionCode() : $this->expressionCode;

        return $this->expressionCode;
    }

    /**
     * @param ExpressionCode|null $expressionCode
     * @return static
     */
    public function setExpressionCode(?ExpressionCode $expressionCode = null): static
    {
        $this->expressionCode = $expressionCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExpressionCode(): static
    {
        $this->expressionCode = null;

        return $this;
    }

    /**
     * @return array<Expression>|null
     */
    public function getExpression(): ?array
    {
        return $this->expression;
    }

    /**
     * @param array<Expression>|null $expression
     * @return static
     */
    public function setExpression(?array $expression = null): static
    {
        $this->expression = $expression;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExpression(): static
    {
        $this->expression = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearExpression(): static
    {
        $this->expression = [];

        return $this;
    }

    /**
     * @return Expression|null
     */
    public function firstExpression(): ?Expression
    {
        $expression = $this->expression ?? [];
        $expression = reset($expression);

        if ($expression === false) {
            return null;
        }

        return $expression;
    }

    /**
     * @return Expression|null
     */
    public function lastExpression(): ?Expression
    {
        $expression = $this->expression ?? [];
        $expression = end($expression);

        if ($expression === false) {
            return null;
        }

        return $expression;
    }

    /**
     * @param Expression $expression
     * @return static
     */
    public function addToExpression(Expression $expression): static
    {
        $this->expression[] = $expression;

        return $this;
    }

    /**
     * @return Expression
     */
    public function addToExpressionWithCreate(): Expression
    {
        $this->addToexpression($expression = new Expression());

        return $expression;
    }

    /**
     * @param Expression $expression
     * @return static
     */
    public function addOnceToExpression(Expression $expression): static
    {
        if (!is_array($this->expression)) {
            $this->expression = [];
        }

        $this->expression[0] = $expression;

        return $this;
    }

    /**
     * @return Expression
     */
    public function addOnceToExpressionWithCreate(): Expression
    {
        if (!is_array($this->expression)) {
            $this->expression = [];
        }

        if ($this->expression === []) {
            $this->addOnceToexpression(new Expression());
        }

        return $this->expression[0];
    }

    /**
     * @return DurationPeriod|null
     */
    public function getDurationPeriod(): ?DurationPeriod
    {
        return $this->durationPeriod;
    }

    /**
     * @return DurationPeriod
     */
    public function getDurationPeriodWithCreate(): DurationPeriod
    {
        $this->durationPeriod = is_null($this->durationPeriod) ? new DurationPeriod() : $this->durationPeriod;

        return $this->durationPeriod;
    }

    /**
     * @param DurationPeriod|null $durationPeriod
     * @return static
     */
    public function setDurationPeriod(?DurationPeriod $durationPeriod = null): static
    {
        $this->durationPeriod = $durationPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDurationPeriod(): static
    {
        $this->durationPeriod = null;

        return $this;
    }

    /**
     * @return array<SuggestedEvidence>|null
     */
    public function getSuggestedEvidence(): ?array
    {
        return $this->suggestedEvidence;
    }

    /**
     * @param array<SuggestedEvidence>|null $suggestedEvidence
     * @return static
     */
    public function setSuggestedEvidence(?array $suggestedEvidence = null): static
    {
        $this->suggestedEvidence = $suggestedEvidence;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSuggestedEvidence(): static
    {
        $this->suggestedEvidence = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSuggestedEvidence(): static
    {
        $this->suggestedEvidence = [];

        return $this;
    }

    /**
     * @return SuggestedEvidence|null
     */
    public function firstSuggestedEvidence(): ?SuggestedEvidence
    {
        $suggestedEvidence = $this->suggestedEvidence ?? [];
        $suggestedEvidence = reset($suggestedEvidence);

        if ($suggestedEvidence === false) {
            return null;
        }

        return $suggestedEvidence;
    }

    /**
     * @return SuggestedEvidence|null
     */
    public function lastSuggestedEvidence(): ?SuggestedEvidence
    {
        $suggestedEvidence = $this->suggestedEvidence ?? [];
        $suggestedEvidence = end($suggestedEvidence);

        if ($suggestedEvidence === false) {
            return null;
        }

        return $suggestedEvidence;
    }

    /**
     * @param SuggestedEvidence $suggestedEvidence
     * @return static
     */
    public function addToSuggestedEvidence(SuggestedEvidence $suggestedEvidence): static
    {
        $this->suggestedEvidence[] = $suggestedEvidence;

        return $this;
    }

    /**
     * @return SuggestedEvidence
     */
    public function addToSuggestedEvidenceWithCreate(): SuggestedEvidence
    {
        $this->addTosuggestedEvidence($suggestedEvidence = new SuggestedEvidence());

        return $suggestedEvidence;
    }

    /**
     * @param SuggestedEvidence $suggestedEvidence
     * @return static
     */
    public function addOnceToSuggestedEvidence(SuggestedEvidence $suggestedEvidence): static
    {
        if (!is_array($this->suggestedEvidence)) {
            $this->suggestedEvidence = [];
        }

        $this->suggestedEvidence[0] = $suggestedEvidence;

        return $this;
    }

    /**
     * @return SuggestedEvidence
     */
    public function addOnceToSuggestedEvidenceWithCreate(): SuggestedEvidence
    {
        if (!is_array($this->suggestedEvidence)) {
            $this->suggestedEvidence = [];
        }

        if ($this->suggestedEvidence === []) {
            $this->addOnceTosuggestedEvidence(new SuggestedEvidence());
        }

        return $this->suggestedEvidence[0];
    }
}
