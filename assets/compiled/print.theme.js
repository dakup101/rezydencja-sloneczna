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

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ introAnimation)\n/* harmony export */ });\nfunction introAnimation() {\r\n    // Props\r\n    let introTexts = document.querySelectorAll('[data-slide_text]');\r\n    let introImages = document.querySelectorAll('[data-slide_img]');\r\n    let wrapper = document.querySelector('[data-intro]');\r\n    //Actions\r\n    introTexts[0].classList.add('active');\r\n    introImages[0].classList.add('active');\r\n    wrapper.classList.add('stage__0');\r\n    setTimeout(() => {\r\n        introTexts[0].classList.add('remove');\r\n        introImages[0].classList.add('remove-top');\r\n        introTexts[1].classList.add('active');\r\n        introImages[1].classList.add('active');\r\n        wrapper.classList.add('stage__1');\r\n        setTimeout(() => {\r\n            introTexts[1].classList.add('remove');\r\n            introImages[1].classList.add('remove-top');\r\n            introTexts[2].classList.add('active');\r\n            introImages[2].classList.add('active');\r\n            wrapper.classList.add('stage__2');\r\n            setTimeout(() => {\r\n                wrapper.style.transform = ('translateY(-100%)');\r\n                wrapper.classList.add('stage__3');\r\n            }, 1000);\r\n        }, 1000);\r\n    }, 1000);\r\n    sessionStorage.setItem('evrwhr_rezydencja_intro', 'seen');\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/introAnimation.ts?");

/***/ })

}]);