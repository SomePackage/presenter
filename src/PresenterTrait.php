<?php

namespace SomePackage\Presenter;

class PresenterTrait
{
    public function setPresenterClass(string $class)
    {
        $this->presenter = $class;

        return $this;
    }

    public function getPresenterClass()
    {
        return $this->presenter;
    }

    public function isSamePresenterClass(string $class)
    {
        return $this->presenter == $class;
    }

    public function toArray()
    {
        $presenter = $this->getPresenterClass();
        if ($presenter) {
            $presenter = new $presenter($this);
            return $presenter->toArray();
        }

        return parent::toArray();
    }
}