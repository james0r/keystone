// This code will be transpiled from ES6 and output in the header.

import _helpers from './modules/helpers';
import _menus from './modules/menus';

(function(window){
  window.Keystone = window.Keystone || {};

  window.Keystone.helpers = _helpers;
  window.Keystone.menus = _menus;

  // Initialize all Keystone modules
  for (const m in window.Keystone) {
    window.Keystone[m].init();
  }
})(window)