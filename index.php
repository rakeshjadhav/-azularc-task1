<?php 

// Implement the class TextInput that contains:

class TextInput{

    protected $str = '';

    //add the given text to the current value
    public function add($text){

        $this->str = $this->str.''.$text;
    }

    // returns the current value (string)
    Public function getValue() {

        return $this->str;
    }
}



// inherits extends TextInput class
class NumericInput extends TextInput {  

    protected $str = '';

    /* innore non-numeric characters by overrides that add method.*/
    public function add($text){
        
        // check $text var is a number or a numeric
        if(is_numeric($text) == true){

            $this->str = $this->str.''.$text;
            return $this->str;
        }
    }
}

$input = new NumericInput();
$input->add(1);
$input->add('a');
$input->add(0);

print_r('TASK 1  OUTPUT : '.$input->getValue());

?>