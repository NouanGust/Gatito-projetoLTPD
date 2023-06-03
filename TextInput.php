<?php
include_once 'BaseInput.php';

class TextInput extends BaseInput {

    public function render(): string
    {
        return 
            sprintf('<div>
                <label class="">%s</label> <br>
                <input type="text" name="%s" value="%s" class="input" />
            </div>', $this->label, $this->name, $this->value);
    }
}

?>