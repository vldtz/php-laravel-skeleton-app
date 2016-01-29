<?php
/*
 * |--------------------------------------------------------------------------
 * | Detect The Application Environment
 * |--------------------------------------------------------------------------
 * |
 * | Laravel takes a dead simple approach to your application environments
 * | so you can just specify a machine name for the host that matches a
 * | given environment, then we will automatically detect it for you.
 * |
 */
use Dotenv\Dotenv;

const ENV_DEMO = 'demo';
const ENV_PROD = 'prod';
const ENV_LOCAL = 'local';

$environmentPath = __DIR__ . '/../config/env/';
(new Dotenv($environmentPath,'.env.global'))->load();

$setEnv = getenv('APPLICATION_ENV');
if (!$setEnv) {
	$setEnv = getenv('APP_ENV');
}
if (file_exists ( $environmentPath . '.env.' . $setEnv )) {
	(new Dotenv($environmentPath, '.env.' . $setEnv))->overload();
}
