<?php
namespace Qubus\Hooks\Interfaces;

interface DoActionRefArrayHookInterface
{
    /**
     * Execute functions hooked on a specific action hook, specifying arguments in an array.
     *
     * @since 1.0.0
     * @param    string $hook <p>The name of the action to be executed.</p>
     * @param    array  $args <p>The arguments supplied to the functions hooked to <tt>$hook</tt></p>
     * @return   bool         <p>Will return false if $tag does not exist in $filter array.</p>
     */
    public function doActionRefArray($hook, $args);
}
