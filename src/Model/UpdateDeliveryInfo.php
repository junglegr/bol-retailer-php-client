<?php

namespace Coralion\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class UpdateDeliveryInfo extends AbstractModel
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
            'expectedDeliveryDate' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     */
    public $expectedDeliveryDate;
}
