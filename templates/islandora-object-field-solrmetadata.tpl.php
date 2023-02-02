<?php

/**
 * @file
 * Displays an Islandora object as a Solr metadata display
 *
 * Available variables:
 * - $label: The label text.
 * - $object: The Fedora object
 * - $pid: The ID of the object whose label is being displayed.
 * - $solr: The rendered solr metadata for the object
 */
?>
<div class="islandora-object-field-wrapper">
<?php
echo l($label, 'islandora/object/' . $pid);
echo $solr;
?>
</div>
