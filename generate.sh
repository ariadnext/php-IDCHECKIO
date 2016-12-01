#!/usr/bin/env bash

SCRIPT_BASE_NAME=`basename "$0"`

cd `dirname $0`

swagger-codegen generate -l php -i swagger.json -c config-swagger

mv idcheckio-php-client/* .
rm -rf idcheckio-php-client

git apply patchs/*.patch
