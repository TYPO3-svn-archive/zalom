#!/bin/sh
source config.sh

wget -r -c ftp://$ZALOM_FTP_USER:$ZALOM_FTP_PASSWORD@$ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/typo3/ext
mv $ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/typo3/ext/* ./typo3conf/ext/
rm -r $ZALOM_FTP_URL