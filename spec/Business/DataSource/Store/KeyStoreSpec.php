<?php

namespace spec\DigitalClosuxe\Business\DataSource\Store;

use PhpSpec\ObjectBehavior;
use DigitalClosuxe\Business\DataSource\Store\KeyStore;
use DigitalClosuxe\Business\DataSource\Concern\KeyStorePropertyValues;

/**
 * Class KeyStoreSpec
 */
class KeyStoreSpec extends ObjectBehavior
{
    use KeyStorePropertyValues;

    function let()
    {
        $this->beConstructedWith($this->propertyKeys());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(KeyStore::class);
    }

    function it_has_string_value_guuid()
    {
        $this->getGuuid()->shouldBeString();
    }

    function it_has_field_key_value()
    {
        $this->getFieldKey()->shouldBe(
            $this->getFieldKeyValue()
        );
    }

    function it_has_field_key_value_value()
    {
        $this->getFieldValue()->shouldBe(
            $this->getFieldKeyValueValue()
        );
    }
}
