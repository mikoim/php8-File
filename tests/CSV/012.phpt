--TEST--
File_CSV Test Case 012: Read headers
--FILE--
<?php
// $Id$
/**
 * Test for:
 *  - Parsing of headers
 */

require_once 'File/CSV.php';

$file = '012.csv';
$conf = File_CSV::discoverFormat($file);
$conf['header'] = true;

$data = array();
File_CSV::read($file, $conf);
while ($res = File_CSV::read($file, $conf)) {
    $data[] = $res;
}

print "Data:\n";
print_r($data);
print "\n";
?>
--EXPECT--
Data:
Array
(
    [0] => Array
        (
            [header] => I'm a little header
            [body] => this is my teapot
            [foot] => can't be!
        )

)