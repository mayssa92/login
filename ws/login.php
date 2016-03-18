<?php 

    include ('bd.php');  
    function cleanPost($val) {
  if(!isset($_POST[$val])) {
    $_POST[$val] = NULL;
    return;
  }
  $_POST[$val] = trim(htmlentities($_POST[$val], ENT_QUOTES, 'UTF-8'));
}

function validateUser($u, $p) {
  return $u == 'Mail' && $p = 'Password';
}
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
  cleanPost('Mail');
  cleanPost('Password');

  if(validateUser($_POST['Mail'], $_POST['Password'])) {
    $userPrefs = array(
      'Name' => 'mayssa',    
      'background' => 'FFE78D'
    );
    echo json_encode($userPrefs);
  }
  else {
    header('HTTP/1.1 403 Forbidden');
    echo 'Invalid login information provided';
  }
}
else {
  header('HTTP/1.1 404 Not Found');
  echo '404 page not found!'; // well you will have to make it prettier!
}
                       ?>