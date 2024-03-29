(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/Plugin/masonry', ['exports', 'jquery', 'Plugin'], factory);
  } else if (typeof exports !== "undefined") {
    factory(exports, require('jquery'), require('Plugin'));
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, global.jQuery, global.Plugin);
    global.PluginMasonry = mod.exports;
  }
})(this, function (exports, _jquery, _Plugin2) {
  'use strict';

  Object.defineProperty(exports, "__esModule", {
    value: true
  });

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  var _Plugin3 = babelHelpers.interopRequireDefault(_Plugin2);

  var NAME = 'masonry';

  var Masonry = function (_Plugin) {
    babelHelpers.inherits(Masonry, _Plugin);

    function Masonry() {
      babelHelpers.classCallCheck(this, Masonry);
      return babelHelpers.possibleConstructorReturn(this, (Masonry.__proto__ || Object.getPrototypeOf(Masonry)).apply(this, arguments));
    }

    babelHelpers.createClass(Masonry, [{
      key: 'getName',
      value: function getName() {
        return NAME;
      }
    }, {
      key: 'render',
      value: function render() {
        if (typeof _jquery2.default.fn.masonry === 'undefined') {
          return;
        }

        var $el = this.$el;
        if (_jquery2.default.fn.imagesLoaded) {
          $el.imagesLoaded(function () {
            $el.masonry(this.options);
          });
        } else {
          $el.masonry(this.options);
        }
      }
    }], [{
      key: 'getDefaults',
      value: function getDefaults() {
        return {
          itemSelector: '.masonry-item'
        };
      }
    }]);
    return Masonry;
  }(_Plugin3.default);

  _Plugin3.default.register(NAME, Masonry);

  exports.default = Masonry;
});