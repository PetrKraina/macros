# Macros
Classes for easier work in php templates/views.

## Timestamp
Adds time as query to filename and changes it after every chnage in file.<br>
Client is forced to download the file again after every modification.<br>
<br>
**Usage**
```php
use Mavi\Macros\Timestamp;
```

```html
<link rel="stylesheet" href="<?php echo Timestamp::set('./style.css'); ?>">
/*
 * Result:
 * <link rel="stylesheet" href="./style.css?v=15643574531">
 */
```
