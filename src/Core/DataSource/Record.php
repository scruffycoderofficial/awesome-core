<?php

namespace DigitalClosuxe\Core\DataSource {

    use Ramsey\Uuid\Uuid;

    /**
     * Class Record
     */
    abstract class Record
    {

        /**
         * Graphical User Interface Identity
         */
        protected $guuid;

        /**
         * Class constructor
         */
        public function __construct(array $data = [])
        {
            $this->setData($data);
        }

        /**
         * [@inheritdoc]
         */
        public function getGuuid()
        {
            return $this->guuid;
        }

        /**
         * Magic setter 
         */
        public function __set($property, $value): void
        {
            $this->{$property} = $value;
        }

        /**
         * Magic getter 
         * 
         * @return mixed
         */
        public function __get($property)
        {
            return  $this->{$property};
        }

        /**
         * Returns this Recod's dataset row
         */
        public function getData(): array
        {
            return get_object_vars($this);
        }

        /**
         * Sets this Record's data
         */
        private function setData(array $data = []): void
        {
            /**
             * If creating a new record - assign guuid
             */
            if (!isset($data['uuid'])) {
                $this->guuid = Uuid::uuid1()->__toString();
            }

            foreach ($data as $property => $value) {
                if (property_exists($this, $property)) {
                    $this->{$property} = $value;
                }
            }
        }
    }
}
