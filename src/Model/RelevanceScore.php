<?php

namespace Coralion\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class RelevanceScore extends AbstractModel
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
            'countryCode' => [ 'model' => null, 'array' => false ],
            'relevanceScore' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The country for which the relevance score has been calculated against.
     */
    public $countryCode;

    /**
     * @var int The calculated relevance score for the product.
     */
    public $relevanceScore;
}
