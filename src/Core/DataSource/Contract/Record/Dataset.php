<?php

namespace DigitalClosuxe\Core\DataSource\Contract\Record {

    use DigitalClosuxe\Business\Domain\DomainEntity;

    /**
     * Interface Dataset
     */
    interface Dataset
    {
        /**
         * Returns this Record
         */
        public function getGuuid();
    }
}
