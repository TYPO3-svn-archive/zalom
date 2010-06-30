#!/bin/sh
source config.sh

chmod 755 $DUMP_STORAGE_ABS/$DUMP_FILE
rm $DUMP_STORAGE_ABS/$DUMP_FILE
mysqldump --database --opt -Q -u$ZALOM_DB_USER -p$ZALOM_DB_PASSWORD $ZALOM_DB_NAME > $DUMP_STORAGE_ABS/$DUMP_FILE

echo "Dump-File ($DUMP_FILE) was created in $DUMP_STORAGE_ABS"
echo $(ls -lart $DUMP_STORAGE_ABS/$DUMP_FILE)

echo ''																		>> $DUMP_LOGFILE
echo 'ZALOM-MysqlDump:' $(date) 											>> $DUMP_LOGFILE
echo '--------------------------------------------------------------' 		>> $DUMP_LOGFILE
echo $(ls -lart $DUMP_STORAGE_ABS/$DUMP_FILE) 								>> $DUMP_LOGFILE