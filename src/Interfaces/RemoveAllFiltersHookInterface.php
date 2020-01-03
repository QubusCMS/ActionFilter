<?php
namespace Qubus\Hooks\Interfaces;

interface RemoveAllFiltersHookInterface
{
    /**
     * Remove all of the hooks from a filter.
     *
     * @since   1.0.0
     * @param   string  $hook       The filter to remove hooks from.
     * @param   int     $priority   The priority number to remove.
     * @return bool True when finished.
     */
    public function removeAllFilters($hook, $priority = 10);
}
