#!/bin/sh
# source config.sh

rm -r original_fileadmin
rm -r original_typo3conf
rm -r original_typo3temp
rm -r original_uploads

rm -r typo3conf/ext/zalom/log
rm -r typo3conf/ext/zalom/resources/backup
rm -r typo3conf/ext/zalom/resources/documents
rm -r typo3conf/ext/zalom/resources/msd
rm -r typo3conf/ext/zalom/resources/mysqldump
rm -r typo3conf/ext/zalom/resources/shell

rm getData.sh
rm config.sh