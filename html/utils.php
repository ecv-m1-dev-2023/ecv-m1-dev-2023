<?php

function format_sql_date($sql_date)
{
  return date('d/m/Y', strtotime($sql_date));
}
