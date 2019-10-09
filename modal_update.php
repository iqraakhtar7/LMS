<?php
	require 'gettingResults.php';
	header('Content-Type: application/json');

	$aResult = array();

    if( !isset($_POST['functionname']) ) { $aResult['error'] = '';
     }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = ''; 
  }

    if( !isset($aResult['error']) ) {
     //$data=$_POST['arguments'];
     //   $data    = json_decode("$data", true);
        switch($_POST['functionname']) {
            case 'fetch_courses':
               if( !is_array($_POST['arguments']) || (count($_POST['arguments']) < 2) ) {
                   $aResult['error'] = 'Error in arguments!';
               }
               else {
                   $aResult['result'] = fetch_courses($_POST['arguments'][0], $_POST['arguments'][1]);
               }
               break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }
      echo json_encode($aResult);

?>