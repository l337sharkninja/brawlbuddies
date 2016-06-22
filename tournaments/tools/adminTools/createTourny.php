<?php
require('../../tools/challonge.class.php');
$c = new ChallongeAPI('pm6zMVNXAf4bIXWSecAGVKBsshw6b85NPeFAHmce');
$params = array(
  "tournament[name]" => $_POST['tournyname'],
  "tournament[description]" => $_POST['tournydesc'],
  "tournament[tournament_type]" => "double elimination",
  "tournament[open_signup]" => "false",
  "tournament[signup_cap]" => $_POST['tournyparticipants'],
  "tournament[start_at]" => $_POST['tournydatetime'],
  "tournament[check_in_duration]" =>  "15",
  "tournament[open_signup]" => "false",
  "tournament[ranked_by]" => "game wins",
  "tournament[private]" => "true",
  "tournament[hide_forum]" => "true"
  );
$tournament = $c->makeCall("tournaments", $params, "post");
?>