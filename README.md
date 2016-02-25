# maxoptra
Maxoptra REST API Client
=======================


[![Build Status](https://travis-ci.org/vasildakov/maxoptra.svg?branch=master)](https://travis-ci.org/vasildakov/maxoptra)
[![Coverage Status](https://coveralls.io/repos/github/vasildakov/maxoptra/badge.svg?branch=develop)](https://coveralls.io/github/vasildakov/maxoptra?branch=develop)
[![Code Climate](https://codeclimate.com/github/vasildakov/maxoptra/badges/gpa.svg)](https://codeclimate.com/github/vasildakov/maxoptra)


Usage Example
-------------

```php
<?php
    use VasilDakov\MaxOptra\MaxOptra;
    use VasilDakov\MaxOptra\Request\Authentication;

    $config = [
        'base_uri' => 'http://beta.maxoptra.com/rest/2/',
        'timeout'  => 2.0,
        'handler'  => null
    ];

    $client = new Client($config);
    $maxoptra = new MaxOptra($client);

    $request = new Authentication($account, $user, $password);

    $response = $maxoptra->authenticate($request);

```
