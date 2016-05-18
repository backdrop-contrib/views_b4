<?php

/**
 * @file
 * Default view template to display content using views_b4 layout_type
 */
?>

<?php
$layout_type = $options['layout_type'];

switch ($layout_type) {
    case "padding_container":
        print '<div class="l-secondary container">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
            foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="l-secondary-inner ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
    break;

    case "full_width_container":
        print '<div class="l-secondary container-fluid">';
              if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="l-secondary-inner ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
    break;

    case "halfs_container":
        print '<div class="l-halves row">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-6 l-halves-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
    break;

    case "thirds_container":
        print '<div class="l-thirds row">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-4 l-thirds-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
    break;

    case "quarters_container":
        print '<div class="l-quarters row">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-3 l-quarters-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
    break;
}

?>
