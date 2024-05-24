<?php

namespace App\Modules\Support\Traits;

trait DTOArray
{
    /**
     * @param mixed $params
     * 
     * @return array
     */
    public function getAsArray(mixed $params = null): array
    {
        if (!$params) {
            return get_object_vars($this);
        }

        if (!is_array($params)) {
            return [$params => $this->{$params}];
        }

        $entries = [];
        foreach ($params as $entry) {
            $entries[$entry] = $this->{$entry};
        }

        return $entries;
    }
}
