<?php

namespace DigitalClosuxe\Business\DataSource\Contract {

    use DigitalClosuxe\Core\DataSource\Contract\Record\Dataset;

    /**
     * Class KeyStoreDataset
     */
    interface KeyStoreDataset extends Dataset
    {
        /**
         * Returns the field key for this KeyStore Dataset
         */
        public function getFieldKey();

        /**
         * Returns the field value for this KeyStore Dataset
         */
        public function getFieldValue();
    }
}
