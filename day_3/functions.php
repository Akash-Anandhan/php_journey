<?php
function currpage($curr)
{
  return $_SERVER['REQUEST_URI'] === $curr;
}