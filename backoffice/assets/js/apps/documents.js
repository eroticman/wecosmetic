(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/apps/documents', ['jquery'], factory);
  } else if (typeof exports !== "undefined") {
    factory(require('jquery'));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery);
    global.appsDocuments = mod.exports;
  }
})(this, function (_jquery) {
  'use strict';

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  (0, _jquery2.default)(document).ready(function () {
    AppDocuments.run();
  });
});