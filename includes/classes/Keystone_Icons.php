<?php

/**
* This class handles logic for icons used in Keystone.
*/

class Keystone_Icons {
    private static $icon_reference_table;

    private static $fonticon_dental_path;

    private static $fonticon_medical_path;

    private static $elegant_icons_path;

    public function __construct() {

      self::$fonticon_dental_path = get_template_directory_uri() . '/assets/static/flaticon-set-dental.html';
      self::$fonticon_medical_path = get_template_directory_uri() . '/assets/static/flaticon-set-medical.html';
      self::$elegant_icons_path = get_template_directory_uri() . '/assets/static/elegant-icon-set.html';

      add_filter('keystone_render_icon', [$this, 'filterRenderIcon']);
    }

    public function filterRenderIcon($classes) {
      $first_three = substr($classes, 0, 3);
      $formatted_classes = '';

      if ($first_three == 'fa-') {
        // Font Awesome 4.7 Icon
        $formatted_classes = 'fa ' . $classes;

      } else if ($first_three == 'fas' || $first_three == 'fab') {
        // Font Awesome 5 Free Icon

      } else if ($first_three == 'pe-') {
        //PE Icon 7 Stroke Icon

      } else if (strpos($classes, 'flaticon-medical')) {
        //Flaticon Medical Icon

      } else if (strpos($classes, 'flaticon-dental')) {
        //Flaticon Dental Icon
      }

      echo sprintf('<i class="%s"></i>', $formatted_classes);
    }

    public function getIconReferenceTable() {
      $fonticon_dental_path = self::$fonticon_dental_path;
      $fonticon_medical_path = self::$fonticon_medical_path;
      $elegant_icons_path = self::$elegant_icons_path;

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
        <tr>
          <td data-label="Font Awesome 5 Free">Font Awesome 5 Free</td>
          <td data-label="Font Awesome 5 Free Reference Doc">
            <a target="_blank" href="https://fontawesome.com/cheatsheet/free/">
              Open
            </a>
          </td>
        </tr>
        <tr>
          <td data-label="Fonticon Dental Icons">Fonticon Dental Icons</td>
          <td data-label="Fonticon Dental Icons Reference Doc">
            <a target="_blank" href="$fonticon_dental_path">
              Open
            </a>
          </td>
        </tr>
        <tr>
          <td data-label="Fonticon Medical Icons">Fonticon Medical Icons</td>
          <td data-label="Fonticon Medical Icons Reference Doc">
            <a target="_blank" href="$fonticon_medical_path">
              Open
            </a>
          </td>
        </tr>
        <tr>
          <td data-label="PE Icon 7 Stroke">PE Icon 7 Stroke Icons</td>
          <td data-label="PE Icon 7 Stroke Icons Reference Doc">
            <a target="_blank" href="https://themes-pixeden.com/font-demos/7-stroke/">
              Open
            </a>
          </td>
        </tr>
        <tr>
          <td data-label="Elegant Icon Set">Elegant Icon Set</td>
          <td data-label="Elegant Icons Reference Doc">
            <a target="_blank" href="$elegant_icons_path">
              Open
            </a>
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
