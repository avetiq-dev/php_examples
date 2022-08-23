<?php

// __LINE__  It returns the current line number of the file, where this constant is used.
echo "I'm on the line " . __LINE__; // => "I'm on the line 4"


// __FILE__ This magic constant returns the full path of the executed file, where the file is stored.
echo "I'm in " . __FILE__; // => "I'm in /var/www/PHP_EXAMPLES/PHP_Magic_Constants/example.php"


// __DIR__ It returns the full directory path of the executed file.
// The path returned by this magic constant is equivalent to dirname(__FILE__).
echo "I'm in " . __DIR__; // => "I'm in /var/www/PHP_EXAMPLES/PHP_Magic_Constants/example.php"


// __FUNCTION__ This magic constant returns the function name, where this constant is used.
// It will return blank if it is used outside any function.
function myFunction(){
    return __FUNCTION__;
}
echo myFunction(); // => "myFunction"


// __CLASS__ It returns the class name, where this magic constant is used. __CLASS__ constant also works in traits.
class MyClass
{
    function getClassName()
    {
        return __CLASS__;
    }
}
$class = new MyClass;
echo $class->getClassName(); // => MyClass


// __TRAIT__ This magic constant returns the trait name, where it is used.
trait MyTrait
{
    function getTraitName()
    {
        return __TRAIT__;
    }
}

class ExampleClass
{
    use MyTrait;
}

$class = new ExampleClass;
echo $class->getTraitName(); // => "MyTrait"


// __METHOD__ It returns the name of the class method where this magic constant is included.
// The method name is returned the same as it was declared.
class method
{
    public function method_function()
    {
        return __METHOD__;
    }
}

$class = new method;
echo $class->method_function(); // => "method_function"


// __NAMESPACE__ It returns the current namespace where it is used.

//namespace MyProject;
class TestClass {
    public function getNameSpace()
    {
        return __NAMESPACE__;
    }
}

$class = new TestClass;
echo $class->getNameSpace(); // => MyProject