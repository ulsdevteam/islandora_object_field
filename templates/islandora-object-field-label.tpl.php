<?php

/**
 * @file
 * Displays an Islandora object field label.
 *
 * Available variables:
 * - $label: The label text.
 * - $object: The Fedora object
 * - $pid: The ID of the object whose label is being displayed.
 */
echo l($label, 'islandora/object/' . $pid); ?>
