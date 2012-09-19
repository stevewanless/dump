<?php

/**
 * Dump
 *
 * Displays variables in a formatted table, loops through nested arrays or objects
 *
 * @license 	MIT License
 * @author  	Steve Wanless
 * @link		  http://www.seeyouontheflipside.com
 * @twitter		http://www.twitter.com/stevewanless
 * @version 	1.0
 */

function dump($var, $closed = false) {
  
  $style = ""; // style tag for the table
  if ($closed) {
    // called internally, default table to closed and don't output style etc again
    $style = "display:none;";
  } else {
    // print out some stuff to the display on the first loop
    // javascript
    ?>
    <script type='text/javascript'>
      function initMyDump() {
        $('.toggle').click(function(){
          $(this).next('table').toggle();
        });
      };    
    </script>
        
    <script type='text/javascript'>
    	var v = '1.3.2';
  
    	if (window.jQuery === undefined || window.jQuery.fn.jquery < v) {
    		var done = false;
    		var script = document.createElement('script');
    		script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/' + v + '/jquery.min.js';
    		script.onload = script.onreadystatechange = function(){
    			if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
    				done = true;
    				initMyDump();
    			}
    		};
    		document.getElementsByTagName('head')[0].appendChild(script);
    	}
    </script>
    
    <style>
    		#dump {
    		  border: 2px solid #fff;
    		  font-family: Times;
    		}
    		
  		  #dump th {
  		    color: #fff;
  		    text-align: left;
  		    background-color: #44C;
  		    padding: 5px;
  		    font-weight: normal;
  		    vertical-align: top;		    
  		  }
  		  
  		  #dump td {
          color: #666;
  		    background-color: #CDF;
  		    padding: 3px;	
  		    vertical-align: top;	    
  		  }		  
  		  
  		  #dump .toggle:hover {
  		    cursor: pointer;  
  		  }
    </style>
    <?php
  }
  
  // start the table
  echo "<table id='dump' style='$style'>\n";
  echo "<tr>\n\t<th>Key</th>\n\t<th>Value</th>\n";

  if ( is_array($var) || is_object($var) ) {

    // loop through the values
    foreach($var as $key => $value):
      $type = gettype($value);
      
      echo "<tr><td><strong>$key</strong><br /><em><small>$type</small></em></td><td>";
      
      switch ($type) {
        case "boolean":
          if($value):
            echo "TRUE";
          else:
            echo "FALSE";
          endif;
          break;
        case "integer":
          echo $value;
          break;
        case "double":
          echo $value;
          break;          
        case "string":
          if($value != ""):
            echo $value;
          endif;      
          break;      
        case "array":
          echo "<strong class='toggle'><em>array</em></strong>";
          dump($value, true);
          break;                  
        case "object":
          echo "<strong class='toggle'><em>object</em></strong>";      
          echo $value;
          dump($value, true);
          break;                    
        case "NULL":
          echo "NULL";
          break;   
        default:
          echo "Unknown variable type";
      }  
      echo "</td></tr>";
        
    endforeach;
  
  } else {
  
    echo "<tr><td><strong>var</strong><br /><em><small>".gettype($var)."</small></em></td><td>$var</td>";  
    
  }
  
  // close the table
  echo "</table>";  
}


?>