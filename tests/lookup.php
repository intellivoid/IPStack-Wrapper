<?php

    use IPStack\Exceptions\LookupException;
    use IPStack\IPStack;

    $SourceDirectory = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;
    include_once($SourceDirectory . 'IPStack' . DIRECTORY_SEPARATOR . 'IPStack.php');

    $IPStack = new IPStack('bdd0c9563a2932fb1838060e7242c602', false);

    try
    {
        $Results = $IPStack->lookup('186.10.186.116');
    }
    catch(LookupException $lookupException)
    {
        print("Error: " . $lookupException->getMessage() . PHP_EOL);
        print("Error Code: " . $lookupException->getCode() . PHP_EOL);
        exit(255);
    }

    var_dump($Results);
    exit(0);