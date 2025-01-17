<?php

require_once("../card.php");

// set content type to SVG image
header("Content-Type: image/svg+xml");

// generate demo stats
$demoStats = [
    "totalContributions" => 2048,
    "firstContribution" => "2016-08-10",
    "longestStreak" => [
        "start" => "2020-12-19",
        "end" => "2021-03-14",
        "length" => 86,
    ],
    "currentStreak" => [
        "start" => date("Y-m-d", strtotime("-15 days")),
        "end" => date("Y-m-d"),
        "length" => 16,
    ],
];

// echo SVG data for demo stats
echo generateCard($demoStats);