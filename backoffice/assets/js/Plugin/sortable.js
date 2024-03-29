(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/Plugin/sortable', ['exports', 'Plugin'], factory);
  } else if (typeof exports !== "undefined") {
    factory(exports, require('Plugin'));
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, global.Plugin);
    global.PluginSortable = mod.exports;
  }
})(this, function (exports, _Plugin2) {
  'use strict';

  Object.defineProperty(exports, "__esModule", {
    value: true
  });

  var _Plugin3 = babelHelpers.interopRequireDefault(_Plugin2);

  var NAME = 'sortable';

  var Sortable = function (_Plugin) {
    babelHelpers.inherits(Sortable, _Plugin);

    function Sortable() {
      babelHelpers.classCallCheck(this, Sortable);
      return babelHelpers.possibleConstructorReturn(this, (Sortable.__proto__ || Object.getPrototypeOf(Sortable)).apply(this, arguments));
    }

    babelHelpers.createClass(Sortable, [{
      key: 'getName',
      value: function getName() {
        return NAME;
      }
    }, {
      key: 'render',
      value: function render() {
        window.Sortable.create(this.$el.get(0), this.options);
      }
    }], [{
      key: 'getDefaults',
      value: function getDefaults() {
        return {
          ghostClass: 'sortable-placeholder',
          dragClass: 'sortable-dragging'
        };
      }
    }]);
    return Sortable;
  }(_Plugin3.default);

  _Plugin3.default.register(NAME, Sortable);

  exports.default = Sortable;
});