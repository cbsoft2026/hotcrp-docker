<?php

$Opt["dbHost"] = getenv("DB_HOST");
// $Opt["dbName"] = getenv("DB_NAME");
$Opt["dbUser"] = getenv("DB_USER");
$Opt["dbPassword"] = getenv("DB_PASS");

$Opt["contactEmail"] = getenv("SMTP_FROM");
$Opt["emailFrom"] = getenv("SMTP_FROM");
$Opt["emailReplyTo"] = getenv("SMTP_FROM");

$Opt["smtpServer"] = getenv("SMTP_HOST");
$Opt["smtpPort"] = getenv("SMTP_PORT");
$Opt["smtpSecurity"] = "tls";
$Opt["smtpUsername"] = getenv("SMTP_USER");
$Opt["smtpPassword"] = getenv("SMTP_PASS");

