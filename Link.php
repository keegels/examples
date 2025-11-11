<?php
    class Link
    {
        private value = null;
        private Link next = null;
        private Link previous = null;

        __construct($value)
        {
            $this->value = $value;
        }

        protected function getValue()
        {
            return $this->value;
        }

        protected function setNext(Link $next)
        {
            $this->next = $next;
        }

        protected function setPrevious(Link $previous)
        {
            $this->previous = $previous;
        }
    }
