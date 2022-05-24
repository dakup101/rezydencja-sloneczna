/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/sub/introAnimation.ts":
/*!*****************************************!*\
  !*** ./assets/js/sub/introAnimation.ts ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ introAnimation)\n/* harmony export */ });\nfunction introAnimation() {\r\n    // Props\r\n    let currentSlide = 0;\r\n    let waitTime = 1000;\r\n    let wrapper = document.querySelector('[data-intro]');\r\n    let slides = wrapper.querySelectorAll('[data-intro_slide]');\r\n    console.log(slides);\r\n    // Action\r\n    activate();\r\n    setTimeout(disable, 2000);\r\n    setTimeout(activate, 2200);\r\n    setTimeout(disable, 4200);\r\n    setTimeout(activate, 4400);\r\n    setTimeout(() => {\r\n        wrapper.classList.add('remove');\r\n    }, 6400);\r\n    // Methods\r\n    function activate() {\r\n        wrapper.classList.add('stage__' + (currentSlide));\r\n        console.log(currentSlide);\r\n        slides[currentSlide].classList.add('active');\r\n    }\r\n    function disable() {\r\n        slides[currentSlide].classList.add('remove');\r\n        currentSlide++;\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/introAnimation.ts?");

/***/ }),

/***/ "./assets/js/theme.ts":
/*!****************************!*\
  !*** ./assets/js/theme.ts ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _sub_introAnimation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sub/introAnimation */ \"./assets/js/sub/introAnimation.ts\");\n\r\n// On Load\r\n// Rendered\r\nwindow.addEventListener('DOMContentLoaded', () => {\r\n    (0,_sub_introAnimation__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n});\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/theme.ts?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/js/theme.ts");
/******/ 	
/******/ })()
;