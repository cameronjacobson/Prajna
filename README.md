# Prajna

Early stage of a Xen XAPI client in PHP

## see examples in:

examples/*

### NOTE:

Try the example first, but if failed:

There's a bug in: ```vendor/zendframework/zendframework/library/Zend/Http/Header/Connection.php```

Around line 42
FROM:
  ```list($name, $value) = explode(': ', $headerLine, 2);```
TO:
  ```list($name, $value) = explode(':', $headerLine, 2);```

I guess it's arguable as to whether the bug is in Xen or the Zend Framework, but in order to get Xen XAPI to work, I've found this change is the simplest path.
