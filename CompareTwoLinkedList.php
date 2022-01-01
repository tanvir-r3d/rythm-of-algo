<?php

function compareTwoLinkedList($head1, $head2)
{
    $currentNode1 = $head1;
    $currentNode2 = $head2;

    while ($currentNode1 && $currentNode2) {
        if ($currentNode1->data != $currentNode2->data) {
            return "Not Matched";
        }
        $currentNode1 = $currentNode1->next;
        $currentNode2 = $currentNode2->next;
    }
    return "Matched";
}


class Node
{
    public $next = null, $data;

    public function __construct($value)
    {
        $this->next = $value;
    }
}


class SinglyLinkedList
{
    public $head, $tail;

    public function __construct($value)
    {
        $node = new Node($value);
        $this->head = $node;
        $this->tail = $node;
    }

    public function insert($value)
    {
        $node = new Node($value);
        $node->next = $this->tail;
        $this->tail = $node;
        return $this;
    }
}


$list1 = (new SinglyLinkedList(4))->insert(2)->insert(6)->insert(1);
$list2 = (new SinglyLinkedList(4))->insert(2)->insert(6);

echo compareTwoLinkedList($list1->head, $list2->head);
