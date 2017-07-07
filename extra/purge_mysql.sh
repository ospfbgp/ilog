#!/bin/bash
# This will remove all records older than 5 days
# needs to run ass cron daily
SQL="DELETE FROM syslog WHERE datetime < DATE_SUB(CURDATE(),INTERVAL 5:DAY)"

MYSQL_USER="ilog"
MYSQL_PASS="ilogpassword"
MYSQL_DB="ilog"

echo $SQL | /usr/bin/mysql --user=$MYSQL_USER --password=$MYSQL_PASS $MYSQL_DB
