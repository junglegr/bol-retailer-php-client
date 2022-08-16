<?php

namespace Coralion\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ReducedReplenishment extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'replenishmentId' => [ 'model' => null, 'array' => false ],
            'reference' => [ 'model' => null, 'array' => false ],
            'creationDateTime' => [ 'model' => null, 'array' => false ],
            'lines' => [ 'model' => ReducedReplenishmentLines::class, 'array' => true ],
            'invalidLines' => [ 'model' => ReducedInvalidReplenishmentLine::class, 'array' => true ],
        ];
    }

    /**
     * @var string The unique identifier of the replenishment.
     */
    public $replenishmentId;

    /**
     * @var string Custom user defined reference to identify the replenishment.
     */
    public $reference;

    /**
     * @var string The date and time when this replenishment was created. In ISO 8601 format.
     */
    public $creationDateTime;

    /**
     * @var ReducedReplenishmentLines[]
     */
    public $lines = [];

    /**
     * @var ReducedInvalidReplenishmentLine[]
     */
    public $invalidLines = [];

    public function getCreationDateTime(): ?\DateTime
    {
        if (empty($this->creationDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->creationDateTime);
    }

    /**
     * Returns an array with the eans from lines.
     * @return string[] Eans from lines.
     */
    public function getLinesEans(): array
    {
        return array_map(function ($model) {
            return $model->ean;
        }, $this->lines);
    }

    /**
     * Sets lines by an array of eans.
     * @param string[] $eans Eans for lines.
     */
    public function setLinesEans(array $eans): void
    {
        $this->lines = array_map(function ($ean) {
            return ReducedReplenishmentLines::constructFromArray(['ean' => $ean]);
        }, $eans);
    }

    /**
     * Adds a new ReducedReplenishmentLines to lines by ean.
     * @param string $ean Ean for the ReducedReplenishmentLines to add.
     */
    public function addLinesEan(string $ean): void
    {
        $this->lines[] = ReducedReplenishmentLines::constructFromArray(['ean' => $ean]);
    }

    /**
     * Returns an array with the types from invalidLines.
     * @return string[] Types from invalidLines.
     */
    public function getInvalidLinesTypes(): array
    {
        return array_map(function ($model) {
            return $model->type;
        }, $this->invalidLines);
    }

    /**
     * Sets invalidLines by an array of types.
     * @param string[] $types Types for invalidLines.
     */
    public function setInvalidLinesTypes(array $types): void
    {
        $this->invalidLines = array_map(function ($type) {
            return ReducedInvalidReplenishmentLine::constructFromArray(['type' => $type]);
        }, $types);
    }

    /**
     * Adds a new ReducedInvalidReplenishmentLine to invalidLines by type.
     * @param string $type Type for the ReducedInvalidReplenishmentLine to add.
     */
    public function addInvalidLinesType(string $type): void
    {
        $this->invalidLines[] = ReducedInvalidReplenishmentLine::constructFromArray(['type' => $type]);
    }
}