#!/bin/bash
# This will remove all records older than 7 days
# needs to run ass cron daily
SQL_syslog="DELETE FROM syslog WHERE datetime < NOW() - INTERVAL 7 DAY"
SQL_ignition_catId_10="DELETE FROM ignition_catId_10 WHERE datetime < NOW() - INTERVAL 7 DAY"

MYSQL_USER="ilog"
MYSQL_PASS="ilogpassword"
MYSQL_DB="ilog"

echo $SQL_syslog | /usr/bin/mysql --user=$MYSQL_USER --password=$MYSQL_PASS $MYSQL_DB
echo $SQL_ignition_catId_10 | /usr/bin/mysql --user=$MYSQL_USER --password=$MYSQL_PASS $MYSQL_DB
