<?php
    class Link
    {
        protected value = null;
        protected Link next = null;

        __construct($value)
        {
            $this->value = $value;
        }

        protected function setNext(Link $next)
        {
            $this->next = $next;
        }
    }
