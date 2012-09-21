#!/bin/sh

tar czvf deploy.latest.tgz htdocs library application && s3cmd put deploy.latest.tgz s3://irinabucket/ ; rm deploy.latest.tgz
