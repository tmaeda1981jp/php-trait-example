<?php namespace Smilecode;

trait Accessor
{
    public function __call($method, $args)
    {
        if (!preg_match('/(?P<accessor>set|get)(?P<property>[A-Z][a-zA-Z0-9]*)/', $method, $match) or
            !property_exists(__CLASS__, $match['property'] = lcfirst($match['property']))) {
            throw new \BadMethodCallException($method . 'does not exists.');
        }

        switch ($match['accessor']) {

        case 'get':
            return $this->{$match['property']};

        case 'set':
            if (!$args or (1 !== count($args))) {
                throw new \InvalidArgumentException($method . 'requires an argument.');
            }
            $this->{$match['property']} = $args[0];
        }
    }
}
