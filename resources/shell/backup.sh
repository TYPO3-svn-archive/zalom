#!/bin/sh
source config.sh

echo "Config File ($CONFIG_VERSION) is loaded"
EDIT_FILES=$(find ../../ -mmin $BACKUP_TIME_RANGE | wc -l);

answer=10
if [ "$EDIT_FILES" != 0 ]
  then 
  	echo ''																		>> $BACKUP_LOGFILE
  	echo 'ZALOM-Backup:' $(date) 												>> $BACKUP_LOGFILE
  	echo '--------------------------------------------------------------' 		>> $BACKUP_LOGFILE
  	find ../../ -mmin $BACKUP_TIME_RANGE										>> $BACKUP_LOGFILE
	
	echo "Clean Dump-Folder ($DUMP_STORAGE_ABS)"
  	rm 	$DUMP_STORAGE_ABS/$DUMP_FILE 2> /dev/null 	
  	tar cfvz $BACKUP_STORAGE_REL/$BACKUP_TAR_FILE $BACKUP_TAR_SOURCE $BACKUP_TAR_EXCLUDE 
  else
  	echo ''																		>> $BACKUP_LOGFILE
  	echo 'NO-Backup:' $(date) 													>> $BACKUP_LOGFILE
  	echo '--------------------------------------------------------------' 		>> $BACKUP_LOGFILE
  	find ../../ -mmin $BACKUP_TIME_RANGE										>> $BACKUP_LOGFILE
fi