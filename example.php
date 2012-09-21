<?php 
  include('dump.php');
?>
<html>
	<head>
		<title>Dump Example</title>				
	</head>
	<body>
	
	<p>Example output from <a href="https://github.com/stevewanless/dump/">this function</a>.</p>

  <?
  // ------------------------------------------------------------  
  // array
  echo "<h4>Array</h4>";
    
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
    
  // dump arary
  dump($var);
  
  // ------------------------------------------------------------
  // object  
  echo "<h4>Object</h4>";  
  
  class TestObject {
    public $var = 'this is a value on an object';    
    public $array = array('1' => 'one', '2' => 'two');
  }  
  
  $object = new TestObject();
  
  // dump object  
  dump($object);
  
  // ------------------------------------------------------------  
  // string
  echo "<h4>String</h4>";
  
  // dump string
  dump("This is just a string.");  
  
  ?>

	</body>
</html>