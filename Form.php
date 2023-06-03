<?php

    class Form extends HtmlElement {
        public string $action;
        public string $method;



        /** 
         * @var \HtmlElement[]; 
        */

        /**
         * Form constructor
         * @param string $action;
         * @param string $method;
         */

        public function __construct(string $action = '', string $method = 'get')
        {
            $this->action = $action;
            $this->method = $method;
        }

        protected array $elements = [];

        public function addElement(HtmlElement $el) {
            $this->elements[] = $el;
        }

        public function render(): string {
            
            $content = implode(PHP_EOL, array_map(fn($el) => $el->render(), $this->elements));

            return sprintf('<form action="%s" method="%s" class="entrada_usurario" >%s</form>', $this->action, $this->method, $content);
        }
    }

?>