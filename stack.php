<?php
//JOREN SUMAGANG && JEBE INOC;
class Stack {

    public $stack;
    public $size;

    function __construct($size) {
        $this->stack  = array();
        $this->size = $size;
        echo "The Size of stack is $size <br>";
    }

    function push($item) {
        if(count($this->stack) < $this->size) {
            array_unshift($this->stack, $item);
            echo $item . " is added from stack<br>";
        }
        else {
            echo "Stack is full <br>";
        }
    }

    function pop() {
        if(empty($this->stack)) {
            echo "Stack is empty <br>";
        }
        else {
            $removedItem = array_shift($this->stack);
            echo $removedItem. " is removed from stack<br>";
        }
    }

    function isEmpty() {
        echo "Is the Stack Empty? ";
        echo (!empty($this->stack)) ?  "false <br>" :  "true <br>";
    }

    function isFull() {
        echo "Is the Stack full? ";
        echo (count($this->stack) >= $this->size) ? "true <br>" : "false <br>";
    }

    function peek() {
        echo (empty($this->stack)) ? "Stack is empty <br>" : current($this->stack);
        echo "<br>";
    }
     
}

//
$sizeOfStack = 3;
$books = new Stack($sizeOfStack);

$books->push("English Book");
$books->push("Math Book");
$books->push("The way of the Superior Man");
$books->isFull();
$books->pop();
$books->isFull();
$books->push("Science book");
$books->peek();
$books->pop();
$books->peek();
$books->pop();
$books->pop();
$books->isEmpty();
$books->peek();