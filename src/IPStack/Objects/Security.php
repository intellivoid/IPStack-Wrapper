<?php


    namespace IPStack\Objects;

    use IPStack\Abstracts\CrawlerType;
    use IPStack\Abstracts\ProxyType;
    use IPStack\Abstracts\ThreatLevel;

    /**
     * Class Security
     * @package IPStack\Objects
     */
    class Security
    {
        /**
         * 	Returns true or false depending on whether or not the given IP is associated with a proxy.
         *
         * @var bool
         */
        public $IsProxy;

        /**
         * 	Returns the type of proxy the IP is associated with.
         *
         * @var string|ProxyType
         */
        public $ProxyType;

        /**
         * Returns true or false depending on whether or not the given IP is associated with a crawler.
         *
         * @var bool
         */
        public $IsCrawler;

        /**
         * Returns the name of the crawler the IP is associated with.
         *
         * @var string
         */
        public $CrawlerName;

        /**
         * Returns the type of crawler the IP is associated with.
         *
         * @var string|CrawlerType
         */
        public $CrawlerType;

        /**
         * Returns true or false depending on whether or not the given IP is associated with the anonymous Tor system.
         *
         * @var bool
         */
        public $IsTor;

        /**
         * 	Returns the type of threat level the IP is associated with.
         *
         * @var string|ThreatLevel
         */
        public $ThreatLevel;

        /**
         * Returns an object containing all threat types associated with the IP.
         *
         * @var array(ThreatType)
         */
        public $ThreatType;
        
    }