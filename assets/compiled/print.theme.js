"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunkinstytut_zdrowia"] = self["webpackChunkinstytut_zdrowia"] || []).push([["print"],{

/***/ "./assets/js/sub/introAnimation.ts":
/*!*****************************************!*\
  !*** ./assets/js/sub/introAnimation.ts ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ introAnimation)\n/* harmony export */ });\nfunction introAnimation() {\r\n    // Props\r\n    let currentSlide = 0;\r\n    let waitTime = 1000;\r\n    let wrapper = document.querySelector('[data-intro]');\r\n    let slides = wrapper.querySelectorAll('[data-intro_slide]');\r\n    console.log(slides);\r\n    // Action\r\n    activate();\r\n    setTimeout(disable, 2000);\r\n    setTimeout(activate, 2200);\r\n    setTimeout(disable, 4200);\r\n    setTimeout(activate, 4400);\r\n    setTimeout(() => {\r\n        wrapper.classList.add('remove');\r\n    }, 6400);\r\n    sessionStorage.setItem('evrwhr_rezydencja_intro', 'rendered');\r\n    // Methods\r\n    function activate() {\r\n        wrapper.classList.add('stage__' + (currentSlide));\r\n        console.log(currentSlide);\r\n        slides[currentSlide].classList.add('active');\r\n    }\r\n    function disable() {\r\n        slides[currentSlide].classList.add('remove');\r\n        currentSlide++;\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/introAnimation.ts?");

/***/ })

}]);