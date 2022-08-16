<?php

namespace Coralion\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class InvalidReplenishmentLine extends AbstractModel
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
            'type' => [ 'model' => null, 'array' => false ],
            'quantityAnnounced' => [ 'model' => null, 'array' => false ],
            'quantityReceived' => [ 'model' => null, 'array' => false ],
            'quantityInProgress' => [ 'model' => null, 'array' => false ],
            'quantityWithGradedState' => [ 'model' => null, 'array' => false ],
            'quantityWithRegularState' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this
     * replenishment line.
     */
    public $type;

    /**
     * @var int The amount of announced quantity for this replenishment line.
     */
    public $quantityAnnounced;

    /**
     * @var int The amount of received quantity for this replenishment line.
     */
    public $quantityReceived;

    /**
     * @var int The amount of quantity that is still in progress at the warehouse for this replenishment line.
     */
    public $quantityInProgress;

    /**
     * @var int The quantity within this shipment line that has a graded (unsalable) state.
     */
    public $quantityWithGradedState;

    /**
     * @var int The quantity within this shipment line that has a regular (salable) state.
     */
    public $quantityWithRegularState;
}
