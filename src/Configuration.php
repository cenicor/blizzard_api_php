<?php

namespace BlizzardApi;

use BlizzardApi\Enumerators\Region;

class Configuration
{
    public static ?string $apiKey = null;
    public static ?string $apiSecret = null;
    public static ?Region $region = null;

    public static string $redirectURI;

    public static bool $storeAccessTokenInSession = true;
    public static bool $storeAccessTokenInCache = true;
    public static string $accessTokenSessionKey = 'blizzard_api_access_token';
}
