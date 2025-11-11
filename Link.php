<?php
    class Link
    {
        protected value = null;
        protected Link next = null;
        protected Link previous = null;

        __construct($value)
        {
            $this->value = $value;
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
