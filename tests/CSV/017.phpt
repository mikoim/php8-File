--TEST--
File_CSV Test Case 017: Various different lines.
--FILE--
<?php
// $Id$
/**
 * Test for:
 * - parsing, separators and quotes within quotes
 * - Identical to 016 beside it defines the config up front
 *   i.e. no discoverFormat
 * data gotten from http://www.creativyst.com/Doc/Articles/CSV/CSV01.htm
 */

require_once 'File/CSV.php';

$file = '017.csv';
$conf = array(
    'fields' => 6,
    'sep' => ',',
    'quote' => '"'
);

$data = array();
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
            [0] => Joan "the bone", Anne
            [1] => Jet
            [2] => 9th, at Terrace plc
            [3] => Desert City
            [4] => CO
            [5] => 00123
        )

)
