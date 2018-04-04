<?php
// Class for testing.
class Task extends CI_Model
{
    public $id;
    public $task;
    public $priority;
    public $size;
    public $group;
    public $deadline;
    public $status;
    public $flag;
    public function setId($value)
    {
        $this->id = $value;
    }
    // Check if task text is too large.
    public function setTask($value)
    {
        if (strlen($value) > 64)
        {
            return;
        }
        $this->task = $value;
    }
    // Check if size is valid.
    public function setSize($value)
    {
        if (!is_int($value) || $value >= 4)
        {
            return;
        }
        $this->size = $value;
    }
    // Checks if group is valid.
    public function setGroup($value)
    {
        if (!is_int($value) || $value >= 5)
        {
            return;
        }
        $this->group = $value;
    }
    public function setPriority ($value)
    {
        if (!is_int($value) || $value >= 4)
        {
            return;
        }
        $this->priority = $value;
    }
    public function setDeadline($value)
    {
        $this->deadline = $value;
    }
    public function setStatus($value)
    {
        $this->status = $value;
    }
    public function setFlag($value)
    {
        $this->flag = $value;
    }
}