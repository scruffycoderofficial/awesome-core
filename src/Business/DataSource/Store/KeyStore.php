<?php

namespace DigitalClosuxe\Business\DataSource\Store {

    use DigitalClosuxe\Core\DataSource\Record;
    use DigitalClosuxe\Business\DataSource\Contract\KeyStoreDataset;

    /**
     * Class KeyStore
     */
    final class KeyStore extends Record implements KeyStoreDataset
    {
        /**
         * mixed $fieldKey
         */
        protected $fieldKey;

        /**
         * mixed $fieldKey
         */
        protected $fieldValue;

        /**
         * [@inheritdoc]
         */
        public function getFieldKey()
        {
            return $this->fieldKey;
        }

        /**
         * [@inheritdoc]
         */
        public function getFieldValue()
        {
            return $this->fieldValue;
        }
    }
}
