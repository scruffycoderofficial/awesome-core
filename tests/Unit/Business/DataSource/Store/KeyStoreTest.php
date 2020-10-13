<?php

namespace DigitalClosuxe\Tests\Unit\Business\DataSource\Store {

    use PHPUnit\Framework\TestCase;
    use DigitalClosuxe\Business\DataSource\Store\KeyStore;
    use DigitalClosuxe\Business\DataSource\Contract\KeyStoreDataset;
    use DigitalClosuxe\Business\DataSource\Concern\KeyStorePropertyValues;

    /**
     * Class KeyStoreTest
     */
    class KeyStoreTest extends TestCase
    {
        use KeyStorePropertyValues;

        /**
         * @test
         * @dataProvider keyStoreProvider
         */
        public function it_sets_keystore_record_properties_with_their_values($keyStore)
        {
            self::assertSame($this->getFieldKeyValue(), $keyStore->fieldKey);
            self::assertSame($this->getFieldKeyValueValue(), $keyStore->fieldValue);
        }

        /**
         * @test
         * @dataProvider keyStoreProvider
         */
        public function it_sets_keystore_record_guuid_if_not_set($keyStore)
        {
            self::assertIsString($keyStore->guuid);
        }

        /**
         * @test
         * @dataProvider keyStoreProvider
         */
        public function it_has_keystore_property_values_as_an_array_using_get_data_method($keyStore)
        {
            self::assertArrayHasKey('guuid', $keyStore->getData());
            self::assertArrayHasKey('fieldKey', $keyStore->getData());
            self::assertArrayHasKey('fieldValue', $keyStore->getData());
        }

        /**
         * @test
         * @dataProvider keyStoreProvider
         */
        public function it_is_a_keystore_dataset($keyStore)
        {
            self::assertInstanceOf(KeyStoreDataset::class, $keyStore);
        }

        /**
         * @test
         * @dataProvider keyStoreProvider
         */
        public function it_has_keystore_dataset_get_methods($keyStore)
        {
            self::assertSame($this->getFieldKeyValue(), $keyStore->getFieldKey());
            self::assertSame($this->getFieldKeyValueValue(), $keyStore->getFieldValue());
        }

        /**
         * @todo Favour the use of `yield` and a static method that acts as a 
         *       factory to create the KeyStore based on varying conditions and 
         *       to increase testability of the KeyStore object itself
         */
        public function keyStoreProvider()
        {
            return [[new KeyStore($this->propertyKeys())]];
        }
    }
}
