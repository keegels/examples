<?php
    class SortedLinkedList 
    {
        private ?Link $head = null;
        private int type = 0;
        private const TYPE_NONE = 0;
        private const TYPE_INT = 1;
        private const TYPE_STRING = 2;

        protected function add($value): void
        {
            $this->checkType($value);
            $newLink = new Link($value);

            if ($this->head == null || $value < $this->head->value) {
                $newLink->next = $this->head;
                $this->head = $newLink;
                return;
            }

            $current = $this->head;
            while ($current->next !== null && $current->next->value < $value) {
                $current = $current->next;
            }

            $newLink->next = $current->next;
            $current->next = $newLink;
        }

        protected function echoList()
        {
            $current = $this->head;
            $values = [];
            while ($current !== null) {
                $values[] = $current->value;
                $current = $current->next;
            }

            echo implode("->", $values);
        }

        private function setType($value): void
        {
            if (is_string($value)) {
                $this->type = self::TYPE_STRING;
            } else if (is_int($value)) {
                $this->type = self::TYPE_INT;
            } else {
                throw new Exception("Incorrect type. Value must be string or int");
            }
        }

        private function checkType($value): void
        {
            if ($this->type === self::TYPE_NONE) {
               $this->setType($value);
            } else if (is_int($value) && $this->type != self::TYPE_INT) {
                throw new Exception("Incorrect type. Value type is set to int");
            } else if (is_string($value) && $this->type != self::TYPE_STRING) {
                throw new Exception("Incorrect type. Value type is set to string");
            }
        }
    }
