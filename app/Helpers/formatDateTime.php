<?php
function formatDatetimeToDB(String $dateTime)
{
  return date("Y-m-d H:i:s", strtotime(str_replace('/', '-', $dateTime)));
}
