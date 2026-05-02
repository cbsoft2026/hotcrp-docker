<?php

/**
 * HotCRP multi-conference configuration
 */

$confid = trim(Navigation::get()->base_path, "/");

/**
 * Add one entry per conference
 */
$names = [
  "" => "Test Conference",
  "testconf" => "Test Conference",
  // "<confid>" => "Example Conference Name",
];

/**
 * routing rules
 * Format: "p /<path> <confid>"
 */
$Opt["multiconferenceAnalyzer"] = [
  "p /testconf testconf",
  // "p /<confid> <confid>",
];

$Opt["confid"] = $confid ?: "testconf";

$Opt["shortName"] = ($names[$confid] ?? $confid) . " | CBSoft 2026";
$Opt["longName"] = $names[$confid] ?? $confid;
