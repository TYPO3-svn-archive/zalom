#!/bin/sh
source config.sh

mv fileadmin original_fileadmin
mv typo3conf original_typo3conf
mv typo3temp original_typo3temp
mv uploads original_uploads

wget -r -c --level=0 ftp://$ZALOM_FTP_USER:$ZALOM_FTP_PASSWORD@$ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/fileadmin
wget -r -c --level=0 ftp://$ZALOM_FTP_USER:$ZALOM_FTP_PASSWORD@$ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/typo3conf
wget -r -c --level=0 ftp://$ZALOM_FTP_USER:$ZALOM_FTP_PASSWORD@$ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/typo3temp
wget -r -c --level=0 ftp://$ZALOM_FTP_USER:$ZALOM_FTP_PASSWORD@$ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/uploads

#mv $ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/typo3conf/localconf.php $ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/typo3conf/localconf_original.php
mv $ZALOM_FTP_URL/$ZALOM_FTP_WWWROOT/* ./

# temporaere Daten loeschen
rm -r $ZALOM_FTP_URL
rm typo3conf/temp_CACHED_*.php

# Install-Tool File anlegen
> typo3conf/ENABLE_INSTALL_TOOL