<?php 
  include('dump.php');
?>
<html>
	<head>
		<title>Dump Example</title>				
	</head>
	<body>

  <?
  
  // Test variables
  $var = array();
  $var['boolean_true'] = TRUE;
  $var['boolean_false'] = FALSE;
  $var['integer'] = 1234567890;
  $var['double'] = 10.99;
  $var['string'] = "Hello World";
  $var['null'] = NULL;
  
  $var['array']['one'] = "One";
  $var['array']['two'] = array('two.one' => 'one', 'two.two' => 'two', 'two.three' => 'three' );
  $var['array']['three'] = array('three.one' => 'one', 'three.two' => 'two', 'three.three' => 'three' );
  
  // dump
  dump($var);
  
  ?>

	</body>
</html>