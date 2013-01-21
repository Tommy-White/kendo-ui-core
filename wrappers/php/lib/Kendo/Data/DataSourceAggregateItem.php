<?php

namespace Kendo\Data;

class DataSourceAggregateItem extends \kendo\SerializableObject {
//>> Properties

    public function field($value) {
        $this->setProperty('field', $value);

        return $this;
    }

    public function aggregate($value) {
        $this->setProperty('aggregate', $value);

        return $this;
    }

//<< Properties
}

?>
