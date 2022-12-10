$(function(){
     $.ajaxSetup(
          {
               headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")
          }
     })
})

function unLoading() {
     $.unblockUI()
}

function loading() {
     $.blockUI({
          css: {
               backgroundColor: "transparent",
               border: "none"
          },
          message: '<div class="text-primary spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only">Loading</span> </div><h4 class="text-primary">LOADING</h4>',
          baseZ: 1500,
          overlayCSS: {
               backgroundColor: "#FFFFFF",
               opacity: .7,
               cursor: "wait"
          }
     }), $(".blockUI.blockMsg").center()
}

function alert_error(t) {
     Command: toastr.error(t, "Sorry!");toastr.options = {
          closeButton: !1,
          debug: !1,
          newestOnTop: !1,
          progressBar: !1,
          positionClass: "toast-top-right",
          preventDuplicates: !1,
          onclick: null,
          showDuration: "300",
          hideDuration: "1000",
          timeOut: "5000",
          extendedTimeOut: "1000",
          showEasing: "easeOutBounce",
          hideEasing: "easeInBack",
          showMethod: "slideDown",
          hideMethod: "slideUp"
     },
     unLoading()
}

function alert_success(t) {
     Command: toastr.success(t, "Congratulations!");toastr.options = {
          closeButton: !1,
          debug: !1,
          newestOnTop: !1,
          progressBar: !1,
          positionClass: "toast-top-right",
          preventDuplicates: !1,
          onclick: null,
          showDuration: "300",
          hideDuration: "1000",
          timeOut: "5000",
          extendedTimeOut: "1000",
          showEasing: "easeOutBounce",
          hideEasing: "easeInBack",
          showMethod: "slideDown",
          hideMethod: "slideUp"
     }
}

$.fn.center = function() {
     return this.css("position", "absolute"), this.css("top", ($(window).height() - this.height()) / 2 + $(window).scrollTop() + "px"), this.css("left", ($(window).width() - this.width()) / 2 + $(window).scrollLeft() + "px"), this
}, $(document).ready(function() {
     $(".select2").select2({
          language: "id"
     }), $(".tanggal-umum").datepicker({
          language: "id",
          format: "dd-mm-yyyy",
          autoclose: !0,
          todayHighlight: !0,
          daysOfWeekHighlighted: "0,6",
          orientation: "bottom auto"
     }), $(".tanggal-sebelumnya").datepicker({
          language: "id",
          format: "dd-mm-yyyy",
          autoclose: !0,
          endDate: "d",
          todayHighlight: !0,
          daysOfWeekHighlighted: "0,6",
          orientation: "bottom auto"
     }), $(".bulan-umum").datepicker({
          language: "id",
          format: "mm-yyyy",
          autoclose: !0,
          viewMode: "months",
          minViewMode: "months",
          endDate: "m",
          orientation: "bottom auto"
     }), $(".tahun-sebelumnya").datepicker({
          language: "id",
          format: "yyyy",
          autoclose: !0,
          viewMode: "years",
          minViewMode: "years",
          endDate: "y",
          orientation: "bottom auto"
     })
});