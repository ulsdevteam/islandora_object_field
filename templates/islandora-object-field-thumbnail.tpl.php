<?php

/**
 * @file
 * Displays an Islandora object field label.
 *
 * Available variables:
 * - $label: The label text.
 * - $pid: The ID of the object whose label is being displayed.
 */
?>
<div class="islandora-object-field-wrapper">
<img class="islandora-object-field-thumbnail" src="<?php echo url('islandora/object/'.$pid.'/datastream/TN/view'); ?>" alt="<?php echo htmlentities($label); ?>" />
<div class="islandora-object-field-label">
<?php
echo l($label, 'islandora/object/' . $pid);
?>
</div>
</div>
