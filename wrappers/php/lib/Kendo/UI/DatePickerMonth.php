<?php

namespace Kendo\UI;

class DatePickerMonth extends \Kendo\SerializableObject {
//>> Properties

    public function content($value) {
        $this->setProperty('content', $value);

        return $this;
    }

    public function empty($value) {
        $this->setProperty('empty', $value);

        return $this;
    }

//<< Properties
}

?>
