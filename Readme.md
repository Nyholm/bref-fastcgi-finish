# Test with `fastcgi_finish_request()`

This takes 4 seconds to show the page with the following content: 
```
Hello world!

This should not be visible.
```

Logs looks like: 

```
NOTICE: fpm is running, pid 9

NOTICE: ready to handle connections

WARNING: [pool default] child 10 said into stderr: "[INFO] 1: We got a new request"

WARNING: [pool default] child 10 said into stderr: "[INFO] 2: Output was sent"

WARNING: [pool default] child 10 said into stderr: "NOTICE: PHP message: PHP Warning: fastcgi_finish_request() has been disabled for security reasons in /var/task/index.php on line 11"

WARNING: [pool default] child 10 said into stderr: "[INFO] 3: We told PHP-FPM that we are done"

WARNING: [pool default] child 10 said into stderr: "[INFO] 4: New log after we done some work (sleep)"

09:42:07
END RequestId: 264c29b2-8a52-41f7-ace8-59b100e1f006

09:42:07
REPORT RequestId: 264c29b2-8a52-41f7-ace8-59b100e1f006 Duration: 4029.69 ms Billed Duration: 4400 ms Memory Size: 1024 MB Max Memory Used: 88 MB Init Duration: 290.24 ms

```