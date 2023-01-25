<?php 

// Implement the class TextInput that contains:

class TextInput{

    protected $inputString = '';
    //adds the given text to the current value
    public function add($text)
    {
        $this->inputString = $this->inputString.''.$text;
    }

    // returns the current value (string)
    Public function getValue() 
    {
        return $this->inputString;
    }
}


//Inherits from TextInput
class NumericInput extends TextInput {

    protected $inputString = '';

    // Overrides the add method so that each non-numeric text is ignored.
    public function add($text)
    {
        if(is_numeric($text) == true){

            $this->inputString = $this->inputString.''.$text;
            return $this->inputString;
        }
    }
}

$input = new NumericInput();
$input->add(1);
$input->add('a');
$input->add(0);

print_r('TASK 1  OUTPUT : '.$input->getValue());

?>