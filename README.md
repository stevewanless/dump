dump
====

A nice formatted way of displaying variables instead of using print_r().

I got tired of typing;

  echo "<pre>";
  print_r($var);
  echo "</pre>";

So I wrote this handy little function that does a even better job. It loops through nested arrays and objects and leaves these table initially collapsed so it's easier to view. 

Requires jQuery and will output a script that checks for jQuery and if not already loaded will load it from Google's CDN. 

### instructions

include the file dump.php or copy and paste the function into a common include file so it's loaded then dump you variables to your hearts content like this;

  dump($var);
