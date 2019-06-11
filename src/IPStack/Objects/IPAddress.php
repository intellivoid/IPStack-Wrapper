<?php


    namespace IPStack\Objects;

    /**
     * Class IPAddress
     * @package IPStack\Objects
     */
    class IPAddress
    {
        /**
         * 	Returns the requested IP address.
         *
         * @var string
         */
        public $IP;

        /**
         * Returns the hostname the requested IP resolves to, only returned if Hostname Lookup is enabled.
         *
         * @var string
         */
        public $Hostname;

        /**
         * 	Returns the IP address type IPv4 or IPv6.
         *
         * @var string
         */
        public $Type;

        /**
         * Returns the 2-letter continent code associated with the IP.
         *
         * @var string
         */
        public $ContinentCode;

        /**
         * Returns the name of the continent associated with the IP.
         *
         * @var string
         */
        public $ContinentName;

        /**
         * Returns the 2-letter country code associated with the IP.
         *
         * @var string
         */
        public $CountryCode;

        /**
         * Returns the name of the country associated with the IP.
         *
         * @var string
         */
        public $CountryName;

        /**
         * Returns the region code of the region associated with the IP (e.g. CA for California).
         *
         * @var string
         */
        public $RegionCode;

        /**
         * Returns the name of the region associated with the IP.
         *
         * @var string
         */
        public $RegionName;

        /**
         * 	Returns the name of the city associated with the IP.
         *
         * @var string
         */
        public $City;

        /**
         * 	Returns the ZIP code associated with the IP.
         *
         * @var string
         */
        public $Zip;

        /**
         * 	Returns the latitude value associated with the IP.
         *
         * @var string
         */
        public $Latitude;

        /**
         * Returns the longitude value associated with the IP.
         *
         * @var string
         */
        public $Longitude;

        /**
         * Returns multiple location-related objects
         *
         * @var Location
         */
        public $Location;

        /**
         * Returns an object containing timezone-related data.
         *
         * @var Timezone
         */
        public $Timezone;

        /**
         * Returns an object containing currency-related data.
         *
         * @var Currency
         */
        public $Currency;

        /**
         * Returns an object containing connection-related data.
         *
         * @var Connection
         */
        public $Connection;

        /**
         * Returns an object containing security-related data.
         *
         * @var Security
         */
        public $Security;
    }