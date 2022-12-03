<?php

class Stack {

    public $top;
    public $stack;
    public $size;

    function __construct($size) {
        $this->stack  = array();
        $this->size = $size;
    }

    function push($item) {
        if(count($this->stack) < $this->size) {
            array_unshift($this->stack, $item);
            echo $item . " is added from stack<br>";
            print_r($this->stack); 
            echo "<br>";

        }
        else {
            echo "Stack is full";
        }
    }

    function pop() {

        if(empty($this->stack)) {
            echo "Stack if empty";
        }
        else {
            $removedItem = array_shift($this->stack);
            echo $removedItem. " is removed from stack<br>";
            print_r($this->stack);
            echo "<br>";

        }
    }

    function isEmpty() {
        if(!empty($this->stack)) {
            echo "false";
            return false;
        }
        else {
            echo "true";
            return true;
        }
    }

    function isFull() {
        if(count($this->stack) >= $this->size) {
            echo "true";
            return true;
        }
        else {
        echo "false";
         return false;
        }
    }

    function peek() {
        if(empty($this->stack)) {
            echo "Stack is empty";
        }
            echo current($this->stack);
    }
     
}

$size = 5;
$myStack = new Stack($size);

$myStack->push("Joren");
$myStack->push("Nigga");
$myStack->push("Ski Mask the Slump God");
$myStack->pop();
$myStack->pop();
$myStack->isEmpty();
$myStack->pop();
$myStack->isEmpty();
$myStack->isFull();
$myStack->peek();
$myStack->push("Joren");
$myStack->peek();
$myStack->push("Nigga");
$myStack->peek();
