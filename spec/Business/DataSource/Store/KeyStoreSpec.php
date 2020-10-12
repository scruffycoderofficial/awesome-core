<?php

namespace spec\DigitalClosuxe\Business\DataSource\Store;

use PhpSpec\ObjectBehavior;
use DigitalClosuxe\Business\DataSource\Store\KeyStore;

/**
 * Class KeyStoreSpec
 */
class KeyStoreSpec extends ObjectBehavior
{
    /**
     * Test values for this KeyStore test case
     */
    const PROPERTY_VALUES = [
        'example_key',
        'Value for example_key field'
    ];

    function let()
    {
        $this->beConstructedWith([
            'fieldKey' => self::PROPERTY_VALUES[0],
            'fieldValue' => self::PROPERTY_VALUES[1]
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(KeyStore::class);
    }

    function it_has_string_value_guuid()
    {
        $this->getGuuid()->shouldBeString();
    }

    function it_has_field_key_name()
    {
        $this->getFieldKey()->shouldBe(self::PROPERTY_VALUES[0]);
    }

    function it_has_field_value_value()
    {
        $this->getFieldValue()->shouldBe(self::PROPERTY_VALUES[1]);
    }
}
