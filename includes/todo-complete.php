<?php
// Before we can access storage on our server related to a particular client session,
// we need to announce we will use session using: session_start()
session_start();
//session_unset();

function showToDoComplete() {

    if(isset($_POST['chktask'])) {
  $chktask=$_POST['chktask'];
  echo  $chktask;
}   
  }