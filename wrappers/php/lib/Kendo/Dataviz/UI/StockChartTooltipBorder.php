<?php

namespace Kendo\Dataviz\UI;

class StockChartTooltipBorder extends \Kendo\SerializableObject {
//>> Properties

    public function color($value) {
        $this->setProperty('color', $value);

        return $this;
    }

    public function width($value) {
        $this->setProperty('width', $value);

        return $this;
    }

//<< Properties
}

?>
