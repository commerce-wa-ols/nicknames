<?php

namespace CommerceWA\Utilities;

class Nicknames
{

    /**
     * Grabs the arrays of names from names.json file.
     * @return array
     */
    static private function getNames()
    {
        $file = file_get_contents(__DIR__ . '/names.json');
        return json_decode($file, true);
    }

    /**
     * Finds nicknames for a given name.
     *
     * @api
     * @param string $name Name used as key to find possible nicknames.
     * @return array|bool Array of potential nicknames.
     */

    static public function givenTo($name)
    {
        $names_array = self::getNames();
        if (isset($names_array[strtolower($name)])) {
            return $names_array[strtolower($name)];
        }
        return false;
    }

    /**
     * Finds name for a given nickname.
     *
     * @api
     * @param string $nickname Nickname used as needle to find given name(s).
     * @return array|bool Array of potential given names.
     */
    static public function find($nickname)
    {
        $names_array = self::getNames();
        $results = [];
        foreach ($names_array as $key => $value) {
            if (in_array(strtolower($nickname), $value)) {
                array_push($results, $key);
            }
        }

        return !empty($results) ? $results : false;
    }
}