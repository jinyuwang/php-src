--TEST--
SPL: ArrayIterator and values assigned by reference
--FILE--
<?php
	
$tmp = 1;

$a = new ArrayIterator();
$a[] = $tmp;
$a[] = &$tmp;

echo "Done\n";
?>
--EXPECTF--	
Notice: Indirect modification of overloaded element of ArrayIterator has no effect in %s on line %d

Fatal error: Uncaught EngineException: Cannot assign by reference to overloaded object in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
