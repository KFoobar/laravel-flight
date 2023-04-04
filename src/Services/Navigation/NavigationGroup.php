<?php

namespace KFoobar\Flight\Services\Navigation;

class NavigationGroup
{
    protected $name;
    protected $items = [];
    protected $dropdown;

    public static function make(string $name = null, array $items = [])
    {
        return (new self)->setName($name)->setItems($items);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDropdown()
    {
        return $this->dropdown;
    }

    /**
     * @param mixed $dropdown
     *
     * @return self
     */
    public function setDropdown($dropdown)
    {
        $this->dropdown = $dropdown;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }
}
