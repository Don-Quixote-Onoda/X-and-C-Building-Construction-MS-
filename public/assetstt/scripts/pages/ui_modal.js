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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/assets/scripts/pages/ui_modal.js":
/*!**********************************************!*\
  !*** ./src/assets/scripts/pages/ui_modal.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var UI_modals = function () {\n  var handleModalColor = function handleModalColor() {\n    $('body').on('click', '.exampleColorModal', function () {\n      color = $(this).attr('data-color');\n      $('#exampleColorModal').modal();\n    });\n    $('#exampleColorModal').on('show.bs.modal', function () {\n      $(this).addClass('modal-' + color);\n      $(this).find('.modal-title').text(color[0].toUpperCase() + color.substring(1) + ' Modal');\n    });\n    $('#exampleColorModal').on('hidden.bs.modal', function () {\n      $(this).removeClass('modal-' + color);\n      $(this).find('.modal-title').text('Colored Modal');\n    });\n  };\n\n  var handleModalSizes = function handleModalSizes() {\n    $('body').on('click', '.exampleModalSize', function () {\n      size = $(this).attr('data-size');\n      $('#exampleModalSize').modal();\n    });\n    $('#exampleModalSize').on('show.bs.modal', function () {\n      $(this).find('.modal-dialog').addClass('modal-' + size);\n    });\n    $('#exampleModalSize').on('hidden.bs.modal', function () {\n      $(this).find('.modal-dialog').removeClass('modal-' + size);\n    });\n  };\n\n  var handleVaryingModal = function handleVaryingModal() {\n    $('#exampleVarying').on('show.bs.modal', function (e) {\n      var button = $(e.relatedTarget);\n      var recipient = button.data('recipient');\n      var modal = $(this);\n      modal.find('.modal-title').text('New message to ' + recipient);\n      modal.find('.modal-body input').val(recipient);\n    });\n  };\n\n  return {\n    init: function init() {\n      handleModalColor();\n      handleModalSizes();\n      handleVaryingModal();\n    }\n  };\n}();\n\n$(function () {\n  UI_modals.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL3NjcmlwdHMvcGFnZXMvdWlfbW9kYWwuanM/MTY3ZCJdLCJuYW1lcyI6WyJVSV9tb2RhbHMiLCJoYW5kbGVNb2RhbENvbG9yIiwiJCIsIm9uIiwiY29sb3IiLCJhdHRyIiwibW9kYWwiLCJhZGRDbGFzcyIsImZpbmQiLCJ0ZXh0IiwidG9VcHBlckNhc2UiLCJzdWJzdHJpbmciLCJyZW1vdmVDbGFzcyIsImhhbmRsZU1vZGFsU2l6ZXMiLCJzaXplIiwiaGFuZGxlVmFyeWluZ01vZGFsIiwiZSIsImJ1dHRvbiIsInJlbGF0ZWRUYXJnZXQiLCJyZWNpcGllbnQiLCJkYXRhIiwidmFsIiwiaW5pdCJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBSUEsU0FBUyxHQUFHLFlBQVk7RUFFeEIsSUFBSUMsZ0JBQWdCLEdBQUcsU0FBbkJBLGdCQUFtQixHQUFZO0lBQy9CQyxDQUFDLENBQUMsTUFBRCxDQUFELENBQVVDLEVBQVYsQ0FBYSxPQUFiLEVBQXNCLG9CQUF0QixFQUE0QyxZQUFZO01BQ3BEQyxLQUFLLEdBQUdGLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUcsSUFBUixDQUFhLFlBQWIsQ0FBUjtNQUVBSCxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkksS0FBeEI7SUFDSCxDQUpEO0lBTUFKLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCQyxFQUF4QixDQUEyQixlQUEzQixFQUE0QyxZQUFZO01BQ3BERCxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFLLFFBQVIsQ0FBaUIsV0FBV0gsS0FBNUI7TUFDQUYsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRTSxJQUFSLENBQWEsY0FBYixFQUE2QkMsSUFBN0IsQ0FBa0NMLEtBQUssQ0FBQyxDQUFELENBQUwsQ0FBU00sV0FBVCxLQUF5Qk4sS0FBSyxDQUFDTyxTQUFOLENBQWdCLENBQWhCLENBQXpCLEdBQThDLFFBQWhGO0lBQ0gsQ0FIRDtJQUtBVCxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkMsRUFBeEIsQ0FBMkIsaUJBQTNCLEVBQThDLFlBQVk7TUFDdERELENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVUsV0FBUixDQUFvQixXQUFXUixLQUEvQjtNQUNBRixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFNLElBQVIsQ0FBYSxjQUFiLEVBQTZCQyxJQUE3QixDQUFrQyxlQUFsQztJQUNILENBSEQ7RUFJSCxDQWhCRDs7RUFrQkEsSUFBSUksZ0JBQWdCLEdBQUcsU0FBbkJBLGdCQUFtQixHQUFZO0lBQy9CWCxDQUFDLENBQUMsTUFBRCxDQUFELENBQVVDLEVBQVYsQ0FBYSxPQUFiLEVBQXNCLG1CQUF0QixFQUEyQyxZQUFZO01BQ25EVyxJQUFJLEdBQUdaLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUcsSUFBUixDQUFhLFdBQWIsQ0FBUDtNQUVBSCxDQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkksS0FBdkI7SUFDSCxDQUpEO0lBTUFKLENBQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCQyxFQUF2QixDQUEwQixlQUExQixFQUEyQyxZQUFZO01BQ25ERCxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFNLElBQVIsQ0FBYSxlQUFiLEVBQThCRCxRQUE5QixDQUF1QyxXQUFXTyxJQUFsRDtJQUNILENBRkQ7SUFJQVosQ0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJDLEVBQXZCLENBQTBCLGlCQUExQixFQUE2QyxZQUFZO01BQ3JERCxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFNLElBQVIsQ0FBYSxlQUFiLEVBQThCSSxXQUE5QixDQUEwQyxXQUFXRSxJQUFyRDtJQUNILENBRkQ7RUFHSCxDQWREOztFQWdCQSxJQUFJQyxrQkFBa0IsR0FBRyxTQUFyQkEsa0JBQXFCLEdBQVk7SUFDakNiLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCQyxFQUFyQixDQUF3QixlQUF4QixFQUF5QyxVQUFVYSxDQUFWLEVBQWE7TUFDbEQsSUFBSUMsTUFBTSxHQUFHZixDQUFDLENBQUNjLENBQUMsQ0FBQ0UsYUFBSCxDQUFkO01BQ0EsSUFBSUMsU0FBUyxHQUFHRixNQUFNLENBQUNHLElBQVAsQ0FBWSxXQUFaLENBQWhCO01BQ0EsSUFBSWQsS0FBSyxHQUFHSixDQUFDLENBQUMsSUFBRCxDQUFiO01BRUFJLEtBQUssQ0FBQ0UsSUFBTixDQUFXLGNBQVgsRUFBMkJDLElBQTNCLENBQWdDLG9CQUFvQlUsU0FBcEQ7TUFDQWIsS0FBSyxDQUFDRSxJQUFOLENBQVcsbUJBQVgsRUFBZ0NhLEdBQWhDLENBQW9DRixTQUFwQztJQUNILENBUEQ7RUFRSCxDQVREOztFQVdBLE9BQU87SUFDSEcsSUFBSSxFQUFFLGdCQUFZO01BRWRyQixnQkFBZ0I7TUFDaEJZLGdCQUFnQjtNQUNoQkUsa0JBQWtCO0lBQ3JCO0VBTkUsQ0FBUDtBQVNILENBeERlLEVBQWhCOztBQTBEQWIsQ0FBQyxDQUFDLFlBQVk7RUFDVkYsU0FBUyxDQUFDc0IsSUFBVjtBQUNILENBRkEsQ0FBRCIsImZpbGUiOiIuL3NyYy9hc3NldHMvc2NyaXB0cy9wYWdlcy91aV9tb2RhbC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBVSV9tb2RhbHMgPSBmdW5jdGlvbiAoKSB7XHJcblxyXG4gICAgdmFyIGhhbmRsZU1vZGFsQ29sb3IgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgJCgnYm9keScpLm9uKCdjbGljaycsICcuZXhhbXBsZUNvbG9yTW9kYWwnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGNvbG9yID0gJCh0aGlzKS5hdHRyKCdkYXRhLWNvbG9yJyk7XHJcblxyXG4gICAgICAgICAgICAkKCcjZXhhbXBsZUNvbG9yTW9kYWwnKS5tb2RhbCgpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAkKCcjZXhhbXBsZUNvbG9yTW9kYWwnKS5vbignc2hvdy5icy5tb2RhbCcsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgJCh0aGlzKS5hZGRDbGFzcygnbW9kYWwtJyArIGNvbG9yKTtcclxuICAgICAgICAgICAgJCh0aGlzKS5maW5kKCcubW9kYWwtdGl0bGUnKS50ZXh0KGNvbG9yWzBdLnRvVXBwZXJDYXNlKCkgKyBjb2xvci5zdWJzdHJpbmcoMSkgKyAnIE1vZGFsJyk7XHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgICQoJyNleGFtcGxlQ29sb3JNb2RhbCcpLm9uKCdoaWRkZW4uYnMubW9kYWwnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICQodGhpcykucmVtb3ZlQ2xhc3MoJ21vZGFsLScgKyBjb2xvcik7XHJcbiAgICAgICAgICAgICQodGhpcykuZmluZCgnLm1vZGFsLXRpdGxlJykudGV4dCgnQ29sb3JlZCBNb2RhbCcpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBoYW5kbGVNb2RhbFNpemVzID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQoJ2JvZHknKS5vbignY2xpY2snLCAnLmV4YW1wbGVNb2RhbFNpemUnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHNpemUgPSAkKHRoaXMpLmF0dHIoJ2RhdGEtc2l6ZScpO1xyXG5cclxuICAgICAgICAgICAgJCgnI2V4YW1wbGVNb2RhbFNpemUnKS5tb2RhbCgpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAkKCcjZXhhbXBsZU1vZGFsU2l6ZScpLm9uKCdzaG93LmJzLm1vZGFsJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAkKHRoaXMpLmZpbmQoJy5tb2RhbC1kaWFsb2cnKS5hZGRDbGFzcygnbW9kYWwtJyArIHNpemUpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAkKCcjZXhhbXBsZU1vZGFsU2l6ZScpLm9uKCdoaWRkZW4uYnMubW9kYWwnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICQodGhpcykuZmluZCgnLm1vZGFsLWRpYWxvZycpLnJlbW92ZUNsYXNzKCdtb2RhbC0nICsgc2l6ZSk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGhhbmRsZVZhcnlpbmdNb2RhbCA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAkKCcjZXhhbXBsZVZhcnlpbmcnKS5vbignc2hvdy5icy5tb2RhbCcsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgICAgIHZhciBidXR0b24gPSAkKGUucmVsYXRlZFRhcmdldCk7XHJcbiAgICAgICAgICAgIHZhciByZWNpcGllbnQgPSBidXR0b24uZGF0YSgncmVjaXBpZW50Jyk7XHJcbiAgICAgICAgICAgIHZhciBtb2RhbCA9ICQodGhpcyk7XHJcblxyXG4gICAgICAgICAgICBtb2RhbC5maW5kKCcubW9kYWwtdGl0bGUnKS50ZXh0KCdOZXcgbWVzc2FnZSB0byAnICsgcmVjaXBpZW50KTtcclxuICAgICAgICAgICAgbW9kYWwuZmluZCgnLm1vZGFsLWJvZHkgaW5wdXQnKS52YWwocmVjaXBpZW50KTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcclxuXHJcbiAgICAgICAgICAgIGhhbmRsZU1vZGFsQ29sb3IoKTtcclxuICAgICAgICAgICAgaGFuZGxlTW9kYWxTaXplcygpO1xyXG4gICAgICAgICAgICBoYW5kbGVWYXJ5aW5nTW9kYWwoKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG5cclxufSgpO1xyXG5cclxuJChmdW5jdGlvbiAoKSB7XHJcbiAgICBVSV9tb2RhbHMuaW5pdCgpO1xyXG59KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/assets/scripts/pages/ui_modal.js\n");

/***/ }),

/***/ 2:
/*!****************************************************!*\
  !*** multi ./src/assets/scripts/pages/ui_modal.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\JM\Documents\Template\siqtheme\src\assets\scripts\pages\ui_modal.js */"./src/assets/scripts/pages/ui_modal.js");


/***/ })

/******/ });