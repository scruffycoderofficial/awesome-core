<?php

namespace DigitalClosuxe\Tests\Unit\Business\DataSource\Store {

    use PHPUnit\Framework\TestCase;
    use DigitalClosuxe\Business\DataSource\Store\KeyStore;
    use DigitalClosuxe\Business\DataSource\Contract\KeyStoreDataset;

    /**
     * Class KeyStoreTest
     */
    class KeyStoreTest extends TestCase
    {
        /**
         * Test values for this KeyStore test case
         */
        const PROPERTY_VALUES = [
            'example_key',
            'Value for example_key field'
        ];

        /**
         * @test
         * @dataProvider keyStoreProvider
         */
        public function it_sets_keystore_record_properties_with_their_values($keyStore)
        {
            self::assertSame(self::PROPERTY_VALUES[0], $keyStore->fieldKey);
            self::assertSame(self::PROPERTY_VALUES[1], $keyStore->fieldValue);
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
            self::assertSame(self::PROPERTY_VALUES[0], $keyStore->getFieldKey());
            self::assertSame(self::PROPERTY_VALUES[1], $keyStore->getFieldValue());
        }

        /**
         * @todo Favour the use of `yield` and a static method that acts as a 
         *       factory to create the KeyStore based on varying conditions and 
         *       to increase testability of the KeyStore object itself
         */
        public function keyStoreProvider()
        {
            $keyStore = new KeyStore([
                'fieldKey' => self::PROPERTY_VALUES[0],
                'fieldValue' => self::PROPERTY_VALUES[1]
            ]);

            return [[$keyStore]];
        }
    }
}
