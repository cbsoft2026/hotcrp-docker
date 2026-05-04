<?php

/**
 * HotCRP multi-conference configuration
 */

$confid = trim(str_replace(getenv("HOTCRP_SITEPATH"), "", Navigation::get()->base_path), "/");

/**
 * Add one entry per conference
 */
$names = [
  "" => "Latam SE School",
  "testconf" => "Test Conference",
  "latam-se-school" => "Latam SE School",
  // "<confid>" => "Example Conference Name",
];

/**
 * routing rules
 * Format: "p /<path> <confid>"
 */
$Opt["multiconferenceAnalyzer"] = [
  "p /testconf testconf",
  "p /latam-se-school latam-se-school",
  // "p /<confid> <confid>",
];

$Opt["confid"] = $confid ?: "latam-se-school";

$Opt["shortName"] = ($names[$confid] ?? $confid) . " | CBSoft 2026";
$Opt["longName"] = $names[$confid] ?? $confid;
