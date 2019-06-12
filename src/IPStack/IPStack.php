<?php


    namespace IPStack;

    use IPStack\Exceptions\LookupException;
    use IPStack\Objects\IPAddress;

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Abstracts' . DIRECTORY_SEPARATOR . 'CrawlerType.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Abstracts' . DIRECTORY_SEPARATOR . 'ProxyType.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Abstracts' . DIRECTORY_SEPARATOR . 'ThreatLevel.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Abstracts' . DIRECTORY_SEPARATOR . 'ThreatType.php');

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Exceptions' . DIRECTORY_SEPARATOR . 'LookupException.php');

    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'Connection.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'Currency.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'IPAddress.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'Language.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'Location.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'Security.php');
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'Objects' . DIRECTORY_SEPARATOR . 'Timezone.php');

    /**
     * Class IPStack
     * @package IPStack
     */
    class IPStack
    {
        /**
         * @var string
         */
        private $AccessKey;

        /**
         * @var string
         */
        private $Host;

        /**
         * IPStack constructor.
         * @param string $access_key
         * @param string $host
         */
        public function __construct(string $access_key, string $host = "api.ipstack.com")
        {
            $this->Host = $host;
            $this->AccessKey = $access_key;
        }

        /**
         * Performs a lookup
         *
         * @param string $ip_address
         * @return IPAddress
         * @throws LookupException
         */
        public function lookup(string $ip_address): IPAddress
        {
            $ch = curl_init('https://' . $this->Host . '/'. $ip_address . '?access_key='. $this->AccessKey);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $json = curl_exec($ch);
            curl_close($ch);

            if(isset($json['success']))
            {
                if($json['success'] == false)
                {
                    throw new LookupException($json['error']['info'], (int)$json['error']['code']);
                }
            }

           return IPAddress::fromArray(json_decode($json, true));
        }
    }