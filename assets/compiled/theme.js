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

/***/ "./assets/js/sub/apartamentTableSort-handle.ts":
/*!*****************************************************!*\
  !*** ./assets/js/sub/apartamentTableSort-handle.ts ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ apartamentTableSortHandle)\n/* harmony export */ });\nfunction apartamentTableSortHandle() {\r\n    let tableWrapper = document.querySelector('.apartaments-list');\r\n    if (tableWrapper) {\r\n        Promise.all(/*! import() | print */[__webpack_require__.e(\"vendors-node_modules_swiper_modules_navigation_navigation_min_css-node_modules_swiper_modules-a7262e\"), __webpack_require__.e(\"print\")]).then(__webpack_require__.bind(__webpack_require__, /*! ./apartamentTableSort */ \"./assets/js/sub/apartamentTableSort.ts\")).then(module => {\r\n            const initTableSort = module.default;\r\n            initTableSort();\r\n        });\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/apartamentTableSort-handle.ts?");

/***/ }),

/***/ "./assets/js/sub/contactForm-handle.ts":
/*!*********************************************!*\
  !*** ./assets/js/sub/contactForm-handle.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ contactFormHandle)\n/* harmony export */ });\nfunction contactFormHandle() {\r\n    const contactFormWrapper = document.querySelector('[data-contact_form]');\r\n    if (contactFormWrapper) {\r\n        Promise.all(/*! import() | print */[__webpack_require__.e(\"vendors-node_modules_swiper_modules_navigation_navigation_min_css-node_modules_swiper_modules-a7262e\"), __webpack_require__.e(\"print\")]).then(__webpack_require__.bind(__webpack_require__, /*! ./contactForm */ \"./assets/js/sub/contactForm.ts\")).then(module => {\r\n            const contactForm = module.default;\r\n            contactForm();\r\n        });\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/contactForm-handle.ts?");

/***/ }),

/***/ "./assets/js/sub/introAnimation-handle.ts":
/*!************************************************!*\
  !*** ./assets/js/sub/introAnimation-handle.ts ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ introAnimationHandle)\n/* harmony export */ });\nfunction introAnimationHandle() {\r\n    let introSession = sessionStorage.getItem('evrwhr_rezydencja_intro');\r\n    if (!introSession) {\r\n        Promise.all(/*! import() | print */[__webpack_require__.e(\"vendors-node_modules_swiper_modules_navigation_navigation_min_css-node_modules_swiper_modules-a7262e\"), __webpack_require__.e(\"print\")]).then(__webpack_require__.bind(__webpack_require__, /*! ./introAnimation */ \"./assets/js/sub/introAnimation.ts\")).then(module => {\r\n            const introAnimation = module.default;\r\n            introAnimation();\r\n        });\r\n    }\r\n    else\r\n        document.querySelector('[data-intro]').remove();\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/introAnimation-handle.ts?");

/***/ }),

/***/ "./assets/js/sub/scrollEvents.ts":
/*!***************************************!*\
  !*** ./assets/js/sub/scrollEvents.ts ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ scrollEvents)\n/* harmony export */ });\nfunction scrollEvents() {\r\n    console.log('--- Scroll Events loaded ---');\r\n    document.addEventListener('scroll', function (e) {\r\n        // Site Header\r\n        let siteHeader = document.querySelector('[data-site_header]');\r\n        let scrollPosition = window.scrollY;\r\n        if (scrollPosition >= 30)\r\n            siteHeader.classList.add('scrolled');\r\n        else\r\n            siteHeader.classList.remove('scrolled');\r\n        // Banner Arrow\r\n        let banerArrow = document.querySelector('[data-baner_arrow]');\r\n        let banerArrowHidden = false;\r\n        if (banerArrow && !banerArrowHidden) {\r\n            banerArrow.classList.add('homepage-baner__arrow--hidden');\r\n            banerArrowHidden = true;\r\n        }\r\n    });\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/scrollEvents.ts?");

/***/ }),

/***/ "./assets/js/sub/scrollGallery-handle.ts":
/*!***********************************************!*\
  !*** ./assets/js/sub/scrollGallery-handle.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ scrollGalleryHandle)\n/* harmony export */ });\nfunction scrollGalleryHandle() {\r\n    let scrollGalleryWrapper = document.querySelector('.scroll-gallery');\r\n    if (scrollGalleryWrapper) {\r\n        Promise.all(/*! import() | print */[__webpack_require__.e(\"vendors-node_modules_swiper_modules_navigation_navigation_min_css-node_modules_swiper_modules-a7262e\"), __webpack_require__.e(\"print\")]).then(__webpack_require__.bind(__webpack_require__, /*! ./scrollGallery */ \"./assets/js/sub/scrollGallery.ts\")).then(module => {\r\n            const scrollGallery = module.default;\r\n            scrollGallery();\r\n        });\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/scrollGallery-handle.ts?");

/***/ }),

/***/ "./assets/js/sub/swiper-handle.ts":
/*!****************************************!*\
  !*** ./assets/js/sub/swiper-handle.ts ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ swiperHandle)\n/* harmony export */ });\nfunction swiperHandle() {\r\n    let swiperWrapper = document.querySelector('.swiper');\r\n    if (swiperWrapper) {\r\n        Promise.all(/*! import() | print */[__webpack_require__.e(\"vendors-node_modules_swiper_modules_navigation_navigation_min_css-node_modules_swiper_modules-a7262e\"), __webpack_require__.e(\"print\")]).then(__webpack_require__.bind(__webpack_require__, /*! ./swiper */ \"./assets/js/sub/swiper.ts\")).then(module => {\r\n            const initSwiper = module.default;\r\n            initSwiper();\r\n        });\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/sub/swiper-handle.ts?");

/***/ }),

/***/ "./assets/js/theme.ts":
/*!****************************!*\
  !*** ./assets/js/theme.ts ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _sub_introAnimation_handle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sub/introAnimation-handle */ \"./assets/js/sub/introAnimation-handle.ts\");\n/* harmony import */ var _sub_swiper_handle__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./sub/swiper-handle */ \"./assets/js/sub/swiper-handle.ts\");\n/* harmony import */ var _sub_scrollEvents__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./sub/scrollEvents */ \"./assets/js/sub/scrollEvents.ts\");\n/* harmony import */ var _sub_apartamentTableSort_handle__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./sub/apartamentTableSort-handle */ \"./assets/js/sub/apartamentTableSort-handle.ts\");\n/* harmony import */ var _sub_contactForm_handle__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./sub/contactForm-handle */ \"./assets/js/sub/contactForm-handle.ts\");\n/* harmony import */ var _sub_scrollGallery_handle__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./sub/scrollGallery-handle */ \"./assets/js/sub/scrollGallery-handle.ts\");\n// On Load\r\nconsole.log('--- Page Loaded ---');\r\n\r\n\r\n\r\n\r\n\r\n\r\n// Rendered\r\nwindow.scrollTo(0, 0);\r\nwindow.addEventListener('DOMContentLoaded', () => {\r\n    console.log('--- Page Rendered ---');\r\n    (0,_sub_introAnimation_handle__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n    (0,_sub_swiper_handle__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n    let scroller = 0;\r\n    (0,_sub_scrollEvents__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\r\n    (0,_sub_apartamentTableSort_handle__WEBPACK_IMPORTED_MODULE_3__[\"default\"])();\r\n    (0,_sub_contactForm_handle__WEBPACK_IMPORTED_MODULE_4__[\"default\"])();\r\n    (0,_sub_scrollGallery_handle__WEBPACK_IMPORTED_MODULE_5__[\"default\"])();\r\n});\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/theme.ts?");

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
/******/ 			id: moduleId,
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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
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
/******/ 	/* webpack/runtime/ensure chunk */
/******/ 	(() => {
/******/ 		__webpack_require__.f = {};
/******/ 		// This file contains only the entry chunk.
/******/ 		// The chunk loading function for additional chunks
/******/ 		__webpack_require__.e = (chunkId) => {
/******/ 			return Promise.all(Object.keys(__webpack_require__.f).reduce((promises, key) => {
/******/ 				__webpack_require__.f[key](chunkId, promises);
/******/ 				return promises;
/******/ 			}, []));
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/get javascript chunk filename */
/******/ 	(() => {
/******/ 		// This function allow to reference async chunks
/******/ 		__webpack_require__.u = (chunkId) => {
/******/ 			// return url for filenames based on template
/******/ 			return "" + chunkId + ".theme.js";
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/load script */
/******/ 	(() => {
/******/ 		var inProgress = {};
/******/ 		var dataWebpackPrefix = "instytut-zdrowia:";
/******/ 		// loadScript function to load a script via script tag
/******/ 		__webpack_require__.l = (url, done, key, chunkId) => {
/******/ 			if(inProgress[url]) { inProgress[url].push(done); return; }
/******/ 			var script, needAttach;
/******/ 			if(key !== undefined) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				for(var i = 0; i < scripts.length; i++) {
/******/ 					var s = scripts[i];
/******/ 					if(s.getAttribute("src") == url || s.getAttribute("data-webpack") == dataWebpackPrefix + key) { script = s; break; }
/******/ 				}
/******/ 			}
/******/ 			if(!script) {
/******/ 				needAttach = true;
/******/ 				script = document.createElement('script');
/******/ 		
/******/ 				script.charset = 'utf-8';
/******/ 				script.timeout = 120;
/******/ 				if (__webpack_require__.nc) {
/******/ 					script.setAttribute("nonce", __webpack_require__.nc);
/******/ 				}
/******/ 				script.setAttribute("data-webpack", dataWebpackPrefix + key);
/******/ 				script.src = url;
/******/ 			}
/******/ 			inProgress[url] = [done];
/******/ 			var onScriptComplete = (prev, event) => {
/******/ 				// avoid mem leaks in IE.
/******/ 				script.onerror = script.onload = null;
/******/ 				clearTimeout(timeout);
/******/ 				var doneFns = inProgress[url];
/******/ 				delete inProgress[url];
/******/ 				script.parentNode && script.parentNode.removeChild(script);
/******/ 				doneFns && doneFns.forEach((fn) => (fn(event)));
/******/ 				if(prev) return prev(event);
/******/ 			}
/******/ 			;
/******/ 			var timeout = setTimeout(onScriptComplete.bind(null, undefined, { type: 'timeout', target: script }), 120000);
/******/ 			script.onerror = onScriptComplete.bind(null, script.onerror);
/******/ 			script.onload = onScriptComplete.bind(null, script.onload);
/******/ 			needAttach && document.head.appendChild(script);
/******/ 		};
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
/******/ 	/* webpack/runtime/publicPath */
/******/ 	(() => {
/******/ 		var scriptUrl;
/******/ 		if (__webpack_require__.g.importScripts) scriptUrl = __webpack_require__.g.location + "";
/******/ 		var document = __webpack_require__.g.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript)
/******/ 				scriptUrl = document.currentScript.src
/******/ 			if (!scriptUrl) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) scriptUrl = scripts[scripts.length - 1].src
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\/[^\/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl;
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		__webpack_require__.b = document.baseURI || self.location.href;
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		__webpack_require__.f.j = (chunkId, promises) => {
/******/ 				// JSONP chunk loading for javascript
/******/ 				var installedChunkData = __webpack_require__.o(installedChunks, chunkId) ? installedChunks[chunkId] : undefined;
/******/ 				if(installedChunkData !== 0) { // 0 means "already installed".
/******/ 		
/******/ 					// a Promise means "currently loading".
/******/ 					if(installedChunkData) {
/******/ 						promises.push(installedChunkData[2]);
/******/ 					} else {
/******/ 						if(true) { // all chunks have JS
/******/ 							// setup Promise in chunk cache
/******/ 							var promise = new Promise((resolve, reject) => (installedChunkData = installedChunks[chunkId] = [resolve, reject]));
/******/ 							promises.push(installedChunkData[2] = promise);
/******/ 		
/******/ 							// start chunk loading
/******/ 							var url = __webpack_require__.p + __webpack_require__.u(chunkId);
/******/ 							// create error before stack unwound to get useful stacktrace later
/******/ 							var error = new Error();
/******/ 							var loadingEnded = (event) => {
/******/ 								if(__webpack_require__.o(installedChunks, chunkId)) {
/******/ 									installedChunkData = installedChunks[chunkId];
/******/ 									if(installedChunkData !== 0) installedChunks[chunkId] = undefined;
/******/ 									if(installedChunkData) {
/******/ 										var errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 										var realSrc = event && event.target && event.target.src;
/******/ 										error.message = 'Loading chunk ' + chunkId + ' failed.\n(' + errorType + ': ' + realSrc + ')';
/******/ 										error.name = 'ChunkLoadError';
/******/ 										error.type = errorType;
/******/ 										error.request = realSrc;
/******/ 										installedChunkData[1](error);
/******/ 									}
/******/ 								}
/******/ 							};
/******/ 							__webpack_require__.l(url, loadingEnded, "chunk-" + chunkId, chunkId);
/******/ 						} else installedChunks[chunkId] = 0;
/******/ 					}
/******/ 				}
/******/ 		};
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		// no on chunks loaded
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 		
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkinstytut_zdrowia"] = self["webpackChunkinstytut_zdrowia"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/nonce */
/******/ 	(() => {
/******/ 		__webpack_require__.nc = undefined;
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