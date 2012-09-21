dump
====

A nice formatted way of displaying variables instead of using print_r().

I got tired of typing;

```php
  echo "<pre>";
  print_r($var);
  echo "</pre>";
```

And seeing how cfdump() in ColdFusion works I got a little jealous. So I wrote this handy little function thats better than print_r(). It loops through nested arrays and objects and leaves these table initially collapsed so it's easier to view. 

Works on strings, arrays and objects (public variables only). 

### dependencies 

None, sort of. It requires jQuery but will output a script that checks for jQuery and if not already loaded will load it from Google's CDN. 

### instructions

Include the file dump.php or copy and paste the function into a common include file so it's loaded then dump you variables to your hearts content like this;

```php
  dump($var);
```

Run the example.php file or view how it looks here http://www.seeyouontheflipside.com/dump/

Please let me know if you have any ideas for improvements.