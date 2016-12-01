#!/usr/bin/env bash

SCRIPT_BASE_NAME=`basename "$0"`

cd `dirname $0`

swagger-codegen generate -l php -i swagger.json -c config-swagger

git apply patchs/*.patch
