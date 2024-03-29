(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/uikit/progress-bars', ['jquery', 'Site'], factory);
  } else if (typeof exports !== "undefined") {
    factory(require('jquery'), require('Site'));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery, global.Site);
    global.uikitProgressBars = mod.exports;
  }
})(this, function (_jquery, _Site) {
  'use strict';

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  (0, _jquery2.default)(document).ready(function ($$$1) {
    (0, _Site.run)();
  });

  // Example Progress Animation
  // --------------------------
  (function () {
    (0, _jquery2.default)('#exampleButtonStart').on('click', function () {
      (0, _jquery2.default)('[data-plugin="progress"]').asProgress('start');
    });
    (0, _jquery2.default)('#exampleButtonFinish').on('click', function () {
      (0, _jquery2.default)('[data-plugin="progress"]').asProgress('finish');
    });
    (0, _jquery2.default)('#exampleButtonGoto').on('click', function () {
      (0, _jquery2.default)('[data-plugin="progress"]').asProgress('go', 50);
    });
    (0, _jquery2.default)('#exampleButtonGotoPercentage').on('click', function () {
      (0, _jquery2.default)('[data-plugin="progress"]').asProgress('go', '50%');
    });
    (0, _jquery2.default)('#exampleButtonStop').on('click', function () {
      (0, _jquery2.default)('[data-plugin="progress"]').asProgress('stop');
    });
    (0, _jquery2.default)('#exampleButtonReset').on('click', function () {
      (0, _jquery2.default)('[data-plugin="progress"]').asProgress('reset');
    });
    (0, _jquery2.default)('#exampleButtonRandom').on('click', function (e) {
      e.preventDefault();

      (0, _jquery2.default)('[data-plugin="progress"]').each(function () {
        var number = Math.round(Math.random(1) * 100) + '%';
        (0, _jquery2.default)(this).asProgress('go', number);
      });
    });
  })();
});