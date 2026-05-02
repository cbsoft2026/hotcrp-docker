<?php
// options.php -- HotCRP conference options
// Placed in the public domain

global $Opt;

$Opt["include"] = [
  "conf/options.d/10-env.php",
  "conf/options.d/20-multiconf.php"
];

$Opt["multiconference"] = true;

// NAMES AND SITES
//
//   downloadPrefix  Prefix for downloaded files, such as papers; should
//                   end in a dash. Example: "hotnets5-". Defaults to
//                   $Opt["dbName"] plus a dash.
//   paperSite       [OPTIONAL] URL for this HotCRP installation. Used in
//                   emails. Default is derived from the access URL.

$Opt["conferenceSite"] = "https://cbsoft.sbc.org.br/2026/";

$Opt["contactName"] = "CBSoft 2026";
$Opt["sendEmail"] = true;
$Opt["emailSender"] = null;
$Opt["internalMailer"] = false;


// -------------------------------------------------------------------------
// OTHER CONFIGURATION OPTIONS
// -------------------------------------------------------------------------

// USER ACCOUNTS
//
//   ldapLogin       If set, use LDAP to authenticate users. The ldapLogin
//                   string must have the form "LDAP_URL DN_PATTERN", where
//                   DN_PATTERN contains a "*" character to be replaced by
//                   the username. Example: "ldaps://ldapserver/ uid=*,o=ORG"
//   httpAuthLogin   If set, use HTTP authentication to authenticate users.
//                   Requires additional web server configuration. A string
//                   value is sent as a WWW-Authenticate header. The default
//                   string is "Basic realm="HotCRP"".
//   defaultEmailDomain Set to the default domain for account email addresses
//                   when using httpAuthLogin.
//   disableNewUsers Don’t allow new users to register.
//   disableNonPC    Disable all accounts except PC and sysadmin accounts.


// PAPER STORAGE
//
//   docstore        Set to true to serve papers and other downloads from a
//                   cache on the local filesystem. By default this cache is
//                   created in the "docs" directory. You can also set
//                   $Opt["docstore"] to a directory name, or to a directory
//                   pattern such as "docs/%2H/%h%x".
//   s3_bucket       Amazon S3 bucket name to store paper submissions.
//   s3_key          Amazon AWS access key ID (used for S3).
//   s3_secret       Amazon AWS secret access key (used for S3).
//   dbNoPapers      Set to true to not store papers in the database.
//                   Requires docstore, S3 storage, or both.


// TIMES AND DATES
//
//   dateFormat      Format for displaying short dates. Uses PHP date() syntax:
//                   http://www.php.net/manual/en/function.date.php
//                   Defaults to "j M Y H:i:s" [e.g., "1 Jan 2012 00:00:00"]
//                   or "j M Y g:i:sa" [e.g., "1 Jan 2012 12:00:00am"].
//   dateFormatLong  Format for displaying long dates. Defaults to
//                   "l " + dateFormat [e.g., "Tuesday 1 Jan 2012 12:00:00am"].
//   timestampFormat Format for displaying paper timestamps. Defaults to
//                   dateFormat.
//   dateFormatSimplifier Regular expression used to simplify dates. The
//                   default removes ":00" from the ends of dates.
//   dateFormatTimezone Timezone abbreviation used to print dates. Defaults to
//                   the system's timezone abbreviation.

$Opt["timezone"] = "America/Sao_Paulo";
$Opt["time24hour"] = true;

// DISPLAY CUSTOMIZATION OPTIONS
//
//   stylesheets     Array of additional stylesheet filenames/URIs to be
//                   included after "style.css". Example: ["x.css"].
//   fontScript      HTML added to <head> before stylesheets.
//   extraFooter     Extra HTML text shown at the bottom of every page, before
//                   the HotCRP link. If set, should generally end with
//                   " <span class='barsep'>|</span> ".
//   assetsUrl       URL prefix for assets (stylesheets/, scripts/, images/).
//                   Defaults to the conference installation.
//   scriptAssetsUrl URL prefix for script assets. Defaults to assetsUrl,
//                   except for browsers known to ignore `crossorigin`, where
//                   it defaults to the conference installation.
//   jqueryUrl       URL for jQuery. Defaults to the local minified jquery.
//   jqueryCdn       If true, use the jQuery CDN.
//   phpSuffix       The suffix for generated HotCRP URLs. Usually empty; for
//                   some configurations, you may want to set it to ".php".

$Opt["favicon"] = "https://cbsoft.sbc.org.br/2026/favicon.ico";

// BEHAVIOR OPTIONS
//
//   sortByLastName  Set to true to sort users by last name.
//   smartScoreCompare Set to true if a search like "ovemer:>B" should search
//                   for scores better than B (i.e., A), rather than scores
//                   alphabetically after B (i.e., C or D).
//   noFooterVersion Set to true to avoid a version comment in footer HTML.
//   strictJavascript If true, send Javascript with "use strict".
//   hideManager     If set, PC members are not shown paper managers.
//   authorSharing   Controls whether authors can create sharing links.
//                   If -1, they cannot. If +1, authors get sharing links
//                   by default. If 0, authors can request sharing links.

$Opt["smartScoreCompare"] = true;
$Opt["authorSharing"] = 0;


// SESSIONS AND SECURITY
//
//   sessionName     Internal name used to distinguish conference sessions
//                   running on the same server. NO SPACES ALLOWED. Defaults
//                   to $Opt["dbName"].
//   sessionSecure   If true, then set cookies and session cookies only on
//                   secure connections. Defaults to false.
//   sessionDomain   The domain scope for the session cookie. Defaults to the
//                   server's domain. To share a cookie across subdomains,
//                   prefix it with a dot: ".hotcrp.com".
//   sessionLifetime Number of seconds a user may be idle before their session
//                   is garbage collected and they must log in again. Defaults
//                   to 86400 (24 hours). Should be less than or equal to the
//                   system-wide setting for `session.gc_maxlifetime` in
//                   the PHP initialization file, `php.ini`.
//   redirectToHttps If set to true, then HotCRP will redirect all HTTP
//                   connections to HTTPS.
//   allowLocalHttp  Only meaningful if redirectToHttps is set. If true, then
//                   HotCRP will *not* redirect HTTP connections that
//                   originate from localhost.

// EXTERNAL SOFTWARE CONFIGURATION
//
//   memoryLimit     Maximum amount of memory a PHP script can use. Defaults
//                   to 128MB.
//   pdftohtmlCommand  Pathname to pdftohtml executable (used by the `banal`
//                   paper format checker).
//   banalLimit      Limit on number of parallel paper format checker
//                   executions. Defaults to 8.
