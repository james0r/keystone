<?php

/**
* This class handles logic for icons used in Keystone.
*/

class Keystone_Icons {
    private static $flaticon_dental_reference_path;

    private static $flaticon_medical_reference_path;

    private static $elegant_icons_reference_path;

    public function __construct() {
        self::$flaticon_dental_reference_path = get_template_directory_uri() . '/assets/static/flaticon-set-dental.html';
        self::$flaticon_medical_reference_path = get_template_directory_uri() . '/assets/static/flaticon-set-medical.html';
        self::$elegant_icons_reference_path = get_template_directory_uri() . '/assets/static/elegant-icon-set.html';

        add_filter('keystone_render_icon', [$this, 'filterRenderIcon']);
    }

    public function filterRenderIcon($classes) {
        $first_three = substr($classes, 0, 3);
        $formatted_classes = '';

        if ($first_three == 'fa-') {
            // Font Awesome 4.7 Icon
            $formatted_classes = 'fa ' . $classes;
        } elseif ($first_three == 'fas' || $first_three == 'fab') {
            // Font Awesome 5 Free Icon
            $formatted_classes = $classes;
        } elseif ($first_three == 'pe-') {
            // PE Icon 7 Stroke Icon
            $formatted_classes = $classes;
        } elseif (strpos($classes, 'flaticon-dental') !== false) {
            // Flaticon Medical Icon
            if (substr($classes, 0, 1) == '.') {
                $formatted_classes = 'glyph-icon ' . ltrim($classes, '.');
            } else {
                $formatted_classes = 'glyph-icon ' . $classes;
            }
        } elseif (strpos($classes, 'flaticon-medical') !== false) {
            // Flaticon Dental Icon
            $formatted_classes = 'glyph-icon ' . $classes;
        }
        echo sprintf('<i class="%s %s"></i>', $formatted_classes, 'keystone-icon');
    }

    public function getIconReferenceTable() {
        $flaticon_dental_reference_path = self::$flaticon_dental_reference_path;
        $flaticon_medical_reference_path = self::$flaticon_medical_reference_path;
        $elegant_icons_reference_path = self::$elegant_icons_reference_path;
        $show_more = __('Show More', 'keystone');

        return <<<EOT
      <br>
      <table>
      <thead>
        <tr>
          <th scope="col">Icon Library</th>
          <th scope="col">Icon Catalog</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Font Awesome 4.7">Font Awesome 4.7</td>
          <td data-label="Font Awesome 4.7 Reference Doc">
            <a target="_blank" href="https://fontawesome.com/v4.7.0/cheatsheet/">
              Open
            </a>
          </td>
        </tr>
        <tr class="hidden-row-by-default" style="display: none;">
          <td data-label="Font Awesome 5 Free">Font Awesome 5 Free</td>
          <td data-label="Font Awesome 5 Free Reference Doc">
            <a target="_blank" href="https://fontawesome.com/cheatsheet/free/">
              Open
            </a>
          </td>
        </tr>
        <tr class="hidden-row-by-default" style="display: none;">
          <td data-label="Fonticon Dental Icons">Fonticon Dental Icons</td>
          <td data-label="Fonticon Dental Icons Reference Doc">
            <a target="_blank" href="$flaticon_dental_reference_path">
              Open
            </a>
          </td>
        </tr>
        <tr class="hidden-row-by-default" style="display: none;">
          <td data-label="Fonticon Medical Icons">Fonticon Medical Icons</td>
          <td data-label="Fonticon Medical Icons Reference Doc">
            <a target="_blank" href="$flaticon_medical_reference_path">
              Open
            </a>
          </td>
        </tr>
        <tr class="hidden-row-by-default" style="display: none;"> 
          <td data-label="PE Icon 7 Stroke">PE Icon 7 Stroke Icons</td>
          <td data-label="PE Icon 7 Stroke Icons Reference Doc">
            <a target="_blank" href="https://themes-pixeden.com/font-demos/7-stroke/">
              Open
            </a>
          </td>
        </tr>
        <tr class="hidden-row-by-default" style="display: none;">
          <td data-label="Elegant Icon Set">Elegant Icon Set</td>
          <td data-label="Elegant Icons Reference Doc">
            <a target="_blank" href="$elegant_icons_reference_path">
              Open
            </a>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <a href="javascript: void(0);" class="class-reference-show-more"> $show_more </a>
          </td>
        </tr>
      </tbody>
      </table>
      
      <style>
      .icon-field-table table{border:1px solid #ccc;border-collapse:collapse;margin:0;padding:0;width:100%;table-layout:fixed}.icon-field-table table caption{font-size:1.5em;margin:.5em 0 .75em}.icon-field-table table tr{background-color:#f8f8f8;border:1px solid #ddd;padding:.35em}.icon-field-table table td,.icon-field-table table th{padding:.625em;text-align:center!important}.icon-field-table table th{font-size:.85em;letter-spacing:.1em;text-transform:uppercase}@media screen and (max-width:600px){.icon-field-table table{border:0}.icon-field-table table caption{font-size:1.3em}.icon-field-table table thead{border:none;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.icon-field-table table tr{border-bottom:3px solid #ddd;display:block;margin-bottom:.625em}.icon-field-table table td{border-bottom:1px solid #ddd;display:block;font-size:.8em;text-align:right}.icon-field-table table td::before{content:attr(data-label);float:left;font-weight:700;text-transform:uppercase}.icon-field-table table td:last-child{border-bottom:0}}
      </style>
      
      EOT;
    }
}
