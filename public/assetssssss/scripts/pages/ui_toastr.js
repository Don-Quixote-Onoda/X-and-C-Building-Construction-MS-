/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/assets/scripts/pages/ui_toastr.js":
/*!***********************************************!*\
  !*** ./src/assets/scripts/pages/ui_toastr.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var UI_toastr = function () {\n  var toastrNotifications = function toastrNotifications() {\n    var i = -1;\n    var toastCount = 0;\n    var $toastlast;\n\n    var getMessage = function getMessage() {\n      var msg = 'Welcome to siQthemes. Toastr notification sample content.';\n      return msg;\n    };\n\n    $('#showsimple').click(function () {\n      // Display a success toast, with a title\n      toastr.success('Without any options', 'Simple notification!');\n    });\n    $('#showtoast').click(function () {\n      var shortCutFunction = $(\"#toastTypeGroup input:radio:checked\").val();\n      var msg = $('#message').val();\n      var title = $('#title').val() || '';\n      var $showDuration = $('#showDuration');\n      var $hideDuration = $('#hideDuration');\n      var $timeOut = $('#timeOut');\n      var $extendedTimeOut = $('#extendedTimeOut');\n      var $showEasing = $('#showEasing');\n      var $hideEasing = $('#hideEasing');\n      var $showMethod = $('#showMethod');\n      var $hideMethod = $('#hideMethod');\n      var toastIndex = toastCount++;\n      toastr.options = {\n        closeButton: $('#closeButton').prop('checked'),\n        debug: $('#debugInfo').prop('checked'),\n        progressBar: $('#progressBar').prop('checked'),\n        preventDuplicates: $('#preventDuplicates').prop('checked'),\n        positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',\n        onclick: null\n      };\n\n      if ($('#addBehaviorOnToastClick').prop('checked')) {\n        toastr.options.onclick = function () {\n          alert('You can perform some custom action after a toast goes away');\n        };\n      }\n\n      if ($showDuration.val().length) {\n        toastr.options.showDuration = $showDuration.val();\n      }\n\n      if ($hideDuration.val().length) {\n        toastr.options.hideDuration = $hideDuration.val();\n      }\n\n      if ($timeOut.val().length) {\n        toastr.options.timeOut = $timeOut.val();\n      }\n\n      if ($extendedTimeOut.val().length) {\n        toastr.options.extendedTimeOut = $extendedTimeOut.val();\n      }\n\n      if ($showEasing.val().length) {\n        toastr.options.showEasing = $showEasing.val();\n      }\n\n      if ($hideEasing.val().length) {\n        toastr.options.hideEasing = $hideEasing.val();\n      }\n\n      if ($showMethod.val().length) {\n        toastr.options.showMethod = $showMethod.val();\n      }\n\n      if ($hideMethod.val().length) {\n        toastr.options.hideMethod = $hideMethod.val();\n      }\n\n      if (!msg) {\n        msg = getMessage();\n      }\n\n      $(\"#toastrOptions\").text(\"Command: toastr[\" + shortCutFunction + \"](\\\"\" + msg + (title ? \"\\\", \\\"\" + title : '') + \"\\\")\\n\\ntoastr.options = \" + JSON.stringify(toastr.options, null, 2));\n      var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists\n\n      $toastlast = $toast;\n\n      if ($toast.find('#okBtn').length) {\n        $toast.delegate('#okBtn', 'click', function () {\n          alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');\n          $toast.remove();\n        });\n      }\n\n      if ($toast.find('#surpriseBtn').length) {\n        $toast.delegate('#surpriseBtn', 'click', function () {\n          alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');\n        });\n      }\n    });\n\n    function getLastToast() {\n      return $toastlast;\n    }\n\n    $('#clearlasttoast').click(function () {\n      toastr.clear(getLastToast());\n    });\n    $('#cleartoasts').click(function () {\n      toastr.clear();\n    });\n  };\n\n  return {\n    init: function init() {\n      toastrNotifications();\n    }\n  };\n}();\n\n$(function () {\n  UI_toastr.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL3NjcmlwdHMvcGFnZXMvdWlfdG9hc3RyLmpzPzVkMzEiXSwibmFtZXMiOlsiVUlfdG9hc3RyIiwidG9hc3RyTm90aWZpY2F0aW9ucyIsImkiLCJ0b2FzdENvdW50IiwiJHRvYXN0bGFzdCIsImdldE1lc3NhZ2UiLCJtc2ciLCIkIiwiY2xpY2siLCJ0b2FzdHIiLCJzdWNjZXNzIiwic2hvcnRDdXRGdW5jdGlvbiIsInZhbCIsInRpdGxlIiwiJHNob3dEdXJhdGlvbiIsIiRoaWRlRHVyYXRpb24iLCIkdGltZU91dCIsIiRleHRlbmRlZFRpbWVPdXQiLCIkc2hvd0Vhc2luZyIsIiRoaWRlRWFzaW5nIiwiJHNob3dNZXRob2QiLCIkaGlkZU1ldGhvZCIsInRvYXN0SW5kZXgiLCJvcHRpb25zIiwiY2xvc2VCdXR0b24iLCJwcm9wIiwiZGVidWciLCJwcm9ncmVzc0JhciIsInByZXZlbnREdXBsaWNhdGVzIiwicG9zaXRpb25DbGFzcyIsIm9uY2xpY2siLCJhbGVydCIsImxlbmd0aCIsInNob3dEdXJhdGlvbiIsImhpZGVEdXJhdGlvbiIsInRpbWVPdXQiLCJleHRlbmRlZFRpbWVPdXQiLCJzaG93RWFzaW5nIiwiaGlkZUVhc2luZyIsInNob3dNZXRob2QiLCJoaWRlTWV0aG9kIiwidGV4dCIsIkpTT04iLCJzdHJpbmdpZnkiLCIkdG9hc3QiLCJmaW5kIiwiZGVsZWdhdGUiLCJyZW1vdmUiLCJnZXRMYXN0VG9hc3QiLCJjbGVhciIsImluaXQiXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLFNBQVMsR0FBRyxZQUFXO0VBRXZCLElBQUlDLG1CQUFtQixHQUFHLFNBQXRCQSxtQkFBc0IsR0FBVztJQUNqQyxJQUFJQyxDQUFDLEdBQUcsQ0FBQyxDQUFUO0lBQ0EsSUFBSUMsVUFBVSxHQUFHLENBQWpCO0lBQ0EsSUFBSUMsVUFBSjs7SUFDQSxJQUFJQyxVQUFVLEdBQUcsU0FBYkEsVUFBYSxHQUFZO01BQ3pCLElBQUlDLEdBQUcs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QVAsQ0FBWSxRQUFaLEVBQXNCYixNQUExQixFQUFrQztRQUM5QlksTUFBTSxDQUFDRSxRQUFQLENBQWdCLFFBQWhCLEVBQTBCLE9BQTFCLEVBQW1DLFlBQVk7VUFDM0NmLEtBQUssQ0FBQyxrQ0FBa0NULFVBQWxDLEdBQStDLFlBQWhELENBQUw7VUFDQXNCLE1BQU0sQ0FBQ0csTUFBUDtRQUNILENBSEQ7TUFJSDs7TUFDRCxJQUFJSCxNQUFNLENBQUNDLElBQVAsQ0FBWSxjQUFaLEVBQTRCYixNQUFoQyxFQUF3QztRQUNwQ1ksTUFBTSxDQUFDRSxRQUFQLENBQWdCLGNBQWhCLEVBQWdDLE9BQWhDLEVBQXlDLFlBQVk7VUFDakRmLEtBQUssQ0FBQyw0Q0FBNENULFVBQTVDLEdBQXlELHFDQUExRCxDQUFMO1FBQ0gsQ0FGRDtNQUdIO0lBQ0osQ0ExRUQ7O0lBMkVBLFNBQVMwQixZQUFULEdBQXdCO01BQ3BCLE9BQU81QyxVQUFQO0lBQ0g7O0lBQ0RHLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCQyxLQUFyQixDQUEyQixZQUFZO01BQ25DQyxNQUFNLENBQUN3QyxLQUFQLENBQWFELFlBQVksRUFBekI7SUFDSCxDQUZEO0lBR0F6QyxDQUFDLENBQUMsY0FBRCxDQUFELENBQWtCQyxLQUFsQixDQUF3QixZQUFZO01BQ2hDQyxNQUFNLENBQUN3QyxLQUFQO0lBQ0gsQ0FGRDtFQUdILENBakdEOztFQW1HQSxPQUFPO0lBQ0hDLElBQUksRUFBRSxnQkFBWTtNQUNkakQsbUJBQW1CO0lBQ3RCO0VBSEUsQ0FBUDtBQU1ILENBM0dlLEVBQWhCOztBQTZHQU0sQ0FBQyxDQUFDLFlBQVk7RUFDVlAsU0FBUyxDQUFDa0QsSUFBVjtBQUNILENBRkEsQ0FBRCIsImZpbGUiOiIuL3NyYy9hc3NldHMvc2NyaXB0cy9wYWdlcy91aV90b2FzdHIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgVUlfdG9hc3RyID0gZnVuY3Rpb24oKSB7XHJcblxyXG4gICAgdmFyIHRvYXN0ck5vdGlmaWNhdGlvbnMgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICB2YXIgaSA9IC0xO1xyXG4gICAgICAgIHZhciB0b2FzdENvdW50ID0gMDtcclxuICAgICAgICB2YXIgJHRvYXN0bGFzdDtcclxuICAgICAgICB2YXIgZ2V0TWVzc2FnZSA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgdmFyIG1zZyA9ICdXZWxjb21lIHRvIHNpUXRoZW1lcy4gVG9hc3RyIG5vdGlmaWNhdGlvbiBzYW1wbGUgY29udGVudC4nO1xyXG4gICAgICAgICAgICByZXR1cm4gbXNnO1xyXG4gICAgICAgIH07XHJcblxyXG4gICAgICAgICQoJyNzaG93c2ltcGxlJykuY2xpY2soZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAvLyBEaXNwbGF5IGEgc3VjY2VzcyB0b2FzdCwgd2l0aCBhIHRpdGxlXHJcbiAgICAgICAgICAgIHRvYXN0ci5zdWNjZXNzKCdXaXRob3V0IGFueSBvcHRpb25zJywgJ1NpbXBsZSBub3RpZmljYXRpb24hJylcclxuICAgICAgICB9KTtcclxuICAgICAgICAkKCcjc2hvd3RvYXN0JykuY2xpY2soZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICB2YXIgc2hvcnRDdXRGdW5jdGlvbiA9ICQoXCIjdG9hc3RUeXBlR3JvdXAgaW5wdXQ6cmFkaW86Y2hlY2tlZFwiKS52YWwoKTtcclxuICAgICAgICAgICAgdmFyIG1zZyA9ICQoJyNtZXNzYWdlJykudmFsKCk7XHJcbiAgICAgICAgICAgIHZhciB0aXRsZSA9ICQoJyN0aXRsZScpLnZhbCgpIHx8ICcnO1xyXG4gICAgICAgICAgICB2YXIgJHNob3dEdXJhdGlvbiA9ICQoJyNzaG93RHVyYXRpb24nKTtcclxuICAgICAgICAgICAgdmFyICRoaWRlRHVyYXRpb24gPSAkKCcjaGlkZUR1cmF0aW9uJyk7XHJcbiAgICAgICAgICAgIHZhciAkdGltZU91dCA9ICQoJyN0aW1lT3V0Jyk7XHJcbiAgICAgICAgICAgIHZhciAkZXh0ZW5kZWRUaW1lT3V0ID0gJCgnI2V4dGVuZGVkVGltZU91dCcpO1xyXG4gICAgICAgICAgICB2YXIgJHNob3dFYXNpbmcgPSAkKCcjc2hvd0Vhc2luZycpO1xyXG4gICAgICAgICAgICB2YXIgJGhpZGVFYXNpbmcgPSAkKCcjaGlkZUVhc2luZycpO1xyXG4gICAgICAgICAgICB2YXIgJHNob3dNZXRob2QgPSAkKCcjc2hvd01ldGhvZCcpO1xyXG4gICAgICAgICAgICB2YXIgJGhpZGVNZXRob2QgPSAkKCcjaGlkZU1ldGhvZCcpO1xyXG4gICAgICAgICAgICB2YXIgdG9hc3RJbmRleCA9IHRvYXN0Q291bnQrKztcclxuICAgICAgICAgICAgdG9hc3RyLm9wdGlvbnMgPSB7XHJcbiAgICAgICAgICAgICAgICBjbG9zZUJ1dHRvbjogJCgnI2Nsb3NlQnV0dG9uJykucHJvcCgnY2hlY2tlZCcpLFxyXG4gICAgICAgICAgICAgICAgZGVidWc6ICQoJyNkZWJ1Z0luZm8nKS5wcm9wKCdjaGVja2VkJyksXHJcbiAgICAgICAgICAgICAgICBwcm9ncmVzc0JhcjogJCgnI3Byb2dyZXNzQmFyJykucHJvcCgnY2hlY2tlZCcpLFxyXG4gICAgICAgICAgICAgICAgcHJldmVudER1cGxpY2F0ZXM6ICQoJyNwcmV2ZW50RHVwbGljYXRlcycpLnByb3AoJ2NoZWNrZWQnKSxcclxuICAgICAgICAgICAgICAgIHBvc2l0aW9uQ2xhc3M6ICQoJyNwb3NpdGlvbkdyb3VwIGlucHV0OnJhZGlvOmNoZWNrZWQnKS52YWwoKSB8fCAndG9hc3QtdG9wLXJpZ2h0JyxcclxuICAgICAgICAgICAgICAgIG9uY2xpY2s6IG51bGxcclxuICAgICAgICAgICAgfTtcclxuICAgICAgICAgICAgaWYgKCQoJyNhZGRCZWhhdmlvck9uVG9hc3RDbGljaycpLnByb3AoJ2NoZWNrZWQnKSkge1xyXG4gICAgICAgICAgICAgICAgdG9hc3RyLm9wdGlvbnMub25jbGljayA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgICAgICAgICBhbGVydCgnWW91IGNhbiBwZXJmb3JtIHNvbWUgY3VzdG9tIGFjdGlvbiBhZnRlciBhIHRvYXN0IGdvZXMgYXdheScpO1xyXG4gICAgICAgICAgICAgICAgfTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAoJHNob3dEdXJhdGlvbi52YWwoKS5sZW5ndGgpIHtcclxuICAgICAgICAgICAgICAgIHRvYXN0ci5vcHRpb25zLnNob3dEdXJhdGlvbiA9ICRzaG93RHVyYXRpb24udmFsKCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYgKCRoaWRlRHVyYXRpb24udmFsKCkubGVuZ3RoKSB7XHJcbiAgICAgICAgICAgICAgICB0b2FzdHIub3B0aW9ucy5oaWRlRHVyYXRpb24gPSAkaGlkZUR1cmF0aW9uLnZhbCgpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGlmICgkdGltZU91dC52YWwoKS5sZW5ndGgpIHtcclxuICAgICAgICAgICAgICAgIHRvYXN0ci5vcHRpb25zLnRpbWVPdXQgPSAkdGltZU91dC52YWwoKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAoJGV4dGVuZGVkVGltZU91dC52YWwoKS5sZW5ndGgpIHtcclxuICAgICAgICAgICAgICAgIHRvYXN0ci5vcHRpb25zLmV4dGVuZGVkVGltZU91dCA9ICRleHRlbmRlZFRpbWVPdXQudmFsKCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYgKCRzaG93RWFzaW5nLnZhbCgpLmxlbmd0aCkge1xyXG4gICAgICAgICAgICAgICAgdG9hc3RyLm9wdGlvbnMuc2hvd0Vhc2luZyA9ICRzaG93RWFzaW5nLnZhbCgpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGlmICgkaGlkZUVhc2luZy52YWwoKS5sZW5ndGgpIHtcclxuICAgICAgICAgICAgICAgIHRvYXN0ci5vcHRpb25zLmhpZGVFYXNpbmcgPSAkaGlkZUVhc2luZy52YWwoKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAoJHNob3dNZXRob2QudmFsKCkubGVuZ3RoKSB7XHJcbiAgICAgICAgICAgICAgICB0b2FzdHIub3B0aW9ucy5zaG93TWV0aG9kID0gJHNob3dNZXRob2QudmFsKCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYgKCRoaWRlTWV0aG9kLnZhbCgpLmxlbmd0aCkge1xyXG4gICAgICAgICAgICAgICAgdG9hc3RyLm9wdGlvbnMuaGlkZU1ldGhvZCA9ICRoaWRlTWV0aG9kLnZhbCgpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGlmICghbXNnKSB7XHJcbiAgICAgICAgICAgICAgICBtc2cgPSBnZXRNZXNzYWdlKCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgJChcIiN0b2FzdHJPcHRpb25zXCIpLnRleHQoXCJDb21tYW5kOiB0b2FzdHJbXCJcclxuICAgICAgICAgICAgICAgICsgc2hvcnRDdXRGdW5jdGlvblxyXG4gICAgICAgICAgICAgICAgKyBcIl0oXFxcIlwiXHJcbiAgICAgICAgICAgICAgICArIG1zZ1xyXG4gICAgICAgICAgICAgICAgKyAodGl0bGUgPyBcIlxcXCIsIFxcXCJcIiArIHRpdGxlIDogJycpXHJcbiAgICAgICAgICAgICAgICArIFwiXFxcIilcXG5cXG50b2FzdHIub3B0aW9ucyA9IFwiXHJcbiAgICAgICAgICAgICAgICArIEpTT04uc3RyaW5naWZ5KHRvYXN0ci5vcHRpb25zLCBudWxsLCAyKVxyXG4gICAgICAgICAgICApO1xyXG4gICAgICAgICAgICB2YXIgJHRvYXN0ID0gdG9hc3RyW3Nob3J0Q3V0RnVuY3Rpb25dKG1zZywgdGl0bGUpOyAvLyBXaXJlIHVwIGFuIGV2ZW50IGhhbmRsZXIgdG8gYSBidXR0b24gaW4gdGhlIHRvYXN0LCBpZiBpdCBleGlzdHNcclxuICAgICAgICAgICAgJHRvYXN0bGFzdCA9ICR0b2FzdDtcclxuICAgICAgICAgICAgaWYgKCR0b2FzdC5maW5kKCcjb2tCdG4nKS5sZW5ndGgpIHtcclxuICAgICAgICAgICAgICAgICR0b2FzdC5kZWxlZ2F0ZSgnI29rQnRuJywgJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAgICAgICAgIGFsZXJ0KCd5b3UgY2xpY2tlZCBtZS4gaSB3YXMgdG9hc3QgIycgKyB0b2FzdEluZGV4ICsgJy4gZ29vZGJ5ZSEnKTtcclxuICAgICAgICAgICAgICAgICAgICAkdG9hc3QucmVtb3ZlKCk7XHJcbiAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAoJHRvYXN0LmZpbmQoJyNzdXJwcmlzZUJ0bicpLmxlbmd0aCkge1xyXG4gICAgICAgICAgICAgICAgJHRvYXN0LmRlbGVnYXRlKCcjc3VycHJpc2VCdG4nLCAnY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgYWxlcnQoJ1N1cnByaXNlISB5b3UgY2xpY2tlZCBtZS4gaSB3YXMgdG9hc3QgIycgKyB0b2FzdEluZGV4ICsgJy4gWW91IGNvdWxkIHBlcmZvcm0gYW4gYWN0aW9uIGhlcmUuJyk7XHJcbiAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgICAgIGZ1bmN0aW9uIGdldExhc3RUb2FzdCgpIHtcclxuICAgICAgICAgICAgcmV0dXJuICR0b2FzdGxhc3Q7XHJcbiAgICAgICAgfVxyXG4gICAgICAgICQoJyNjbGVhcmxhc3R0b2FzdCcpLmNsaWNrKGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgdG9hc3RyLmNsZWFyKGdldExhc3RUb2FzdCgpKTtcclxuICAgICAgICB9KTtcclxuICAgICAgICAkKCcjY2xlYXJ0b2FzdHMnKS5jbGljayhmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHRvYXN0ci5jbGVhcigpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICB0b2FzdHJOb3RpZmljYXRpb25zKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxuXHJcbn0oKTtcclxuXHJcbiQoZnVuY3Rpb24gKCkge1xyXG4gICAgVUlfdG9hc3RyLmluaXQoKTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/assets/scripts/pages/ui_toastr.js\n");

/***/ }),

/***/ 3:
/*!*****************************************************!*\
  !*** multi ./src/assets/scripts/pages/ui_toastr.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\JM\Documents\Template\siqtheme\src\assets\scripts\pages\ui_toastr.js */"./src/assets/scripts/pages/ui_toastr.js");


/***/ })

/******/ });