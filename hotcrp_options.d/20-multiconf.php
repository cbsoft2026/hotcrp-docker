<?php

$confid = trim(Navigation::get()->base_path, "/");

$names = [
  "" => "Test Conference",
  "testconf" => "Test Conference"
];

$Opt["multiconferenceAnalyzer"] = [
  "p /testconf testconf",
];

$Opt["confid"] = $confid ?: "testconf";

$Opt["shortName"] = ($names[$confid] ?? $confid) . (" | " ?? $confid) . "CBSoft 2026";
$Opt["longName"] = $names[$confid] ?? $confid;
