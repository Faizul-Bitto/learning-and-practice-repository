<?php

/*
to handle a file in php, we use fopen() function
method of handling a file in php:
fopen() -> open a file
fclose() -> close a file
fread() -> read the file
fwrite() -> write the file
feof() -> end of file
fclose() -> close the file
 */

/*
Types of Modes:
r -> read
w -> write (Will erase the file if it already exists and will create a new file if it doesn't exist. Previous contents will be erased everytime you run the code)
a -> append (Will append the contents at the end of the file)
x -> exclusive (Will create a new file if it doesn't exist and will throw an error if it already exists)
r+ -> read and write
w+ -> write and read
a+ -> append and read
x+ -> exclusive and read
 */