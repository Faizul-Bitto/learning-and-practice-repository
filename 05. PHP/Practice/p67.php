<?php

$string = "     Hello World//%^&@#@@!#!@# ??    ";

// we can remove any unnecessary elements from the string also
echo trim( $string, " /%^&@#!?" ); // space, /, %, &, @, #, !, #, ? will be removed
