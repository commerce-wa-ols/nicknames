<?php

namespace CommerceWA\Nicknames;

class Nicknames
{
    protected $names;
    protected $items = [];

    public function __construct()
    {
        $this->names = json_decode(file_get_contents(__DIR__ . '/names.json'), true);
    }

    /**
     * Finds nicknames for a given name.
     *
     * @api
     * @param string $name Name used as key to find possible nicknames.
     * @return array Array of potential nicknames.
     */
    public function givenTo($name)
    {
        if (isset($this->names[strtolower($name)])) {
            return $this->names[strtolower($name)];
        }
        return false;
    }

    /**
     * Finds name for a given nickname.
     *
     * @api
     * @param string $nickname Nickname used as needle to find given name(s).
     * @return array Array of potential given names.
     */
    public function find($nickname)
    {
        foreach ($this->names as $key => $value) {
            if (in_array(strtolower($nickname), $value)) {
                array_push($this->items, $key);
            }
        }

        return !empty($this->items) ? $this->items : false;
    }
}
