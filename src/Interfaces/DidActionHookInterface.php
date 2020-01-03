<?php
namespace Qubus\Hooks\Interfaces;

interface DidActionHookInterface
{
    /**
     * Retrieve the number of times an action has fired.
     *
     * @since 1.0.0
     * @param string $tag <p>The name of the action hook.</p>
     * @return integer <p>The number of times action hook <tt>$tag</tt> is fired.</p>
     */
    public function didAction($tag);
}
