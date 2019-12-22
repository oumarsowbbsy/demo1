(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["scriptpresentation"],{

/***/ "./assets/js/presentation.js":
/*!***********************************!*\
  !*** ./assets/js/presentation.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {__webpack_require__(/*! core-js/modules/web.timers */ "./node_modules/core-js/modules/web.timers.js");

$(function () {
  $('.material-card > .mc-btn-action').click(function () {
    var card = $(this).parent('.material-card');
    var icon = $(this).children('i');
    icon.addClass('fa-spin-fast');

    if (card.hasClass('mc-active')) {
      card.removeClass('mc-active');
      window.setTimeout(function () {
        icon.removeClass('fa-arrow-left').removeClass('fa-spin-fast').addClass('fa-bars');
      }, 800);
    } else {
      card.addClass('mc-active');
      window.setTimeout(function () {
        icon.removeClass('fa-bars').removeClass('fa-spin-fast').addClass('fa-arrow-left');
      }, 800);
    }
  });
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ })

},[["./assets/js/presentation.js","runtime","vendors~scriptaudio~scriptpresentation~scriptproject","vendors~scriptpresentation"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvcHJlc2VudGF0aW9uLmpzIl0sIm5hbWVzIjpbIiQiLCJjbGljayIsImNhcmQiLCJwYXJlbnQiLCJpY29uIiwiY2hpbGRyZW4iLCJhZGRDbGFzcyIsImhhc0NsYXNzIiwicmVtb3ZlQ2xhc3MiLCJ3aW5kb3ciLCJzZXRUaW1lb3V0Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztBQUFBQSxDQUFDLENBQUMsWUFBVztBQUNUQSxHQUFDLENBQUMsaUNBQUQsQ0FBRCxDQUFxQ0MsS0FBckMsQ0FBMkMsWUFBWTtBQUNuRCxRQUFJQyxJQUFJLEdBQUdGLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUcsTUFBUixDQUFlLGdCQUFmLENBQVg7QUFDQSxRQUFJQyxJQUFJLEdBQUdKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssUUFBUixDQUFpQixHQUFqQixDQUFYO0FBQ0FELFFBQUksQ0FBQ0UsUUFBTCxDQUFjLGNBQWQ7O0FBRUEsUUFBSUosSUFBSSxDQUFDSyxRQUFMLENBQWMsV0FBZCxDQUFKLEVBQWdDO0FBQzVCTCxVQUFJLENBQUNNLFdBQUwsQ0FBaUIsV0FBakI7QUFFQUMsWUFBTSxDQUFDQyxVQUFQLENBQWtCLFlBQVc7QUFDekJOLFlBQUksQ0FDQ0ksV0FETCxDQUNpQixlQURqQixFQUVLQSxXQUZMLENBRWlCLGNBRmpCLEVBR0tGLFFBSEwsQ0FHYyxTQUhkO0FBS0gsT0FORCxFQU1HLEdBTkg7QUFPSCxLQVZELE1BVU87QUFDSEosVUFBSSxDQUFDSSxRQUFMLENBQWMsV0FBZDtBQUVBRyxZQUFNLENBQUNDLFVBQVAsQ0FBa0IsWUFBVztBQUN6Qk4sWUFBSSxDQUNDSSxXQURMLENBQ2lCLFNBRGpCLEVBRUtBLFdBRkwsQ0FFaUIsY0FGakIsRUFHS0YsUUFITCxDQUdjLGVBSGQ7QUFLSCxPQU5ELEVBTUcsR0FOSDtBQU9IO0FBQ0osR0ExQkQ7QUEyQkgsQ0E1QkEsQ0FBRCxDIiwiZmlsZSI6InNjcmlwdHByZXNlbnRhdGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZnVuY3Rpb24oKSB7XHJcbiAgICAkKCcubWF0ZXJpYWwtY2FyZCA+IC5tYy1idG4tYWN0aW9uJykuY2xpY2soZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHZhciBjYXJkID0gJCh0aGlzKS5wYXJlbnQoJy5tYXRlcmlhbC1jYXJkJyk7XHJcbiAgICAgICAgdmFyIGljb24gPSAkKHRoaXMpLmNoaWxkcmVuKCdpJyk7XHJcbiAgICAgICAgaWNvbi5hZGRDbGFzcygnZmEtc3Bpbi1mYXN0Jyk7XHJcblxyXG4gICAgICAgIGlmIChjYXJkLmhhc0NsYXNzKCdtYy1hY3RpdmUnKSkge1xyXG4gICAgICAgICAgICBjYXJkLnJlbW92ZUNsYXNzKCdtYy1hY3RpdmUnKTtcclxuXHJcbiAgICAgICAgICAgIHdpbmRvdy5zZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgaWNvblxyXG4gICAgICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcygnZmEtYXJyb3ctbGVmdCcpXHJcbiAgICAgICAgICAgICAgICAgICAgLnJlbW92ZUNsYXNzKCdmYS1zcGluLWZhc3QnKVxyXG4gICAgICAgICAgICAgICAgICAgIC5hZGRDbGFzcygnZmEtYmFycycpO1xyXG5cclxuICAgICAgICAgICAgfSwgODAwKTtcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICBjYXJkLmFkZENsYXNzKCdtYy1hY3RpdmUnKTtcclxuXHJcbiAgICAgICAgICAgIHdpbmRvdy5zZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgaWNvblxyXG4gICAgICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcygnZmEtYmFycycpXHJcbiAgICAgICAgICAgICAgICAgICAgLnJlbW92ZUNsYXNzKCdmYS1zcGluLWZhc3QnKVxyXG4gICAgICAgICAgICAgICAgICAgIC5hZGRDbGFzcygnZmEtYXJyb3ctbGVmdCcpO1xyXG5cclxuICAgICAgICAgICAgfSwgODAwKTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==