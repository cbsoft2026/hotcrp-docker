<?php
// options.php -- HotCRP conference options
// Placed in the public domain

global $Opt;

$Opt["include"] = [
  "conf/options.d/10-env.php",
  "conf/options.d/20-multiconf.php"
];

$Opt["multiconference"] = true;

$Opt["conferenceSite"] = "https://cbsoft.sbc.org.br/2026/";

$Opt["contactName"] = "CBSoft 2026";
$Opt["sendEmail"] = true;
$Opt["emailSender"] = null;
$Opt["internalMailer"] = false;

$Opt["timezone"] = "America/Sao_Paulo";
$Opt["time24hour"] = true;

$Opt["favicon"] = "https://cbsoft.sbc.org.br/2026/favicon.ico";

$Opt["smartScoreCompare"] = true;
$Opt["authorSharing"] = 0;
