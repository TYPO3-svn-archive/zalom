#!/bin/sh

echo "Initial Config-File"

# Main-Config
# -------------------------------------------------

	CONFIG_VERSION='0.0.2'
	ZALOM_BASE=/home/usr/zalomdev/public_html/typo3conf/ext/zalom
	
	# Database
	ZALOM_DB_NAME=zalomdev
	ZALOM_DB_USER=zalomdev
	ZALOM_DB_PASSWORD=Tutwect4
	
	# FTP
	ZALOM_FTP_USER=zalomdev
	ZALOM_FTP_PASSWORD=JiHohov1
	ZALOM_FTP_URL=zalomdev.digicom.nine.ch
	ZALOM_FTP_WWWROOT=public_html

# Backup (backup.sh)
# -------------------------------------------------

	# Ueberpruefung in welcher Zeitspanne das Script nach aktualisierten Dateien suchen soll (1438min => 23h58min)
	BACKUP_TIME_RANGE=-1438 							
	BACKUP_STORAGE_REL=../backup
	BACKUP_LOGFILE=$ZALOM_BASE/log/backup.log
	BACKUP_TAR_EXCLUDE='--exclude=zalom/resources/backup'
	BACKUP_TAR_FILE=ZalomBackup_$(date +%d%m%y)_$(date +%H)h$(date +%M)min$(date +%S)sec.tar.gz
	BACKUP_TAR_SOURCE=../../../zalom/

# MysqlDump (mysqldump.php)
# -------------------------------------------------

	DUMP_STORAGE_ABS=$ZALOM_BASE/resources/mysqldump
	DUMP_FILE=zalomDump.sql
	DUMP_LOGFILE=$ZALOM_BASE/log/mysqldump.log