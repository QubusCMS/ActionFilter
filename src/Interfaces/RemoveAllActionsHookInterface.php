<?php
namespace Qubus\Hooks\Interfaces;

interface RemoveAllActionsHookInterface
{
    /**
     * Remove all of the hooks from an action.
     *
     * @since   1.0.0
     * @param   string  $hook       The action to remove hooks from.
     * @param   int     $priority   The priority number to remove them from.
     * @return bool True when finished.
     */
    public function removeAllActions($hook, $priority = 10);
}
