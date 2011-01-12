#!/bin/sh

cd /home/usr/zalomdev/public_html/typo3conf/ext/zalom/resources/shell
sh backup.sh
sh backupDatabase.sh

echo "END of Backup"