(function (e) {
    function t() {
      e(".dropdown-menu").each(async function () {
        if (
          void 0 !== e(this).attr("id") &&
          e('[data-dropdown-replacer="' + e(this).attr("id") + '"]')
            .length &&
          void 0 === e(this).data("dropdown-programmatically")
        ) {
          let t = e(this).attr("id"),
            n = e('[data-dropdown-replacer="' + t + '"]')
              .parent()
              .find(".dropdown-toggle");
          e(this).removeClass("show"),
            await setTimeout(() => {
              e('[data-dropdown-replacer="' + t + '"]').replaceWith(
                this
              ),
                e(this).removeAttr("style"),
                e(this).removeAttr("data-popper-placement"),
                e(n).attr("aria-expanded", !1);
            }, 200);
        } else void 0 !== e(this).attr("id") && !e('[data-dropdown-replacer="' + e(this).attr("id") + '"]').length && e(this).hasClass("show") && void 0 === e(this).data("dropdown-programmatically") ? e(this).remove() : "initiate" == e(this).data("dropdown-programmatically") ? e(this).attr("data-dropdown-programmatically", "showed") : "showed" == e(this).data("dropdown-programmatically") && e(this).removeAttr("data-dropdown-programmatically");
      });
    }
    function n(n) {
      let r = e(n).find(".dropdown-menu").first(),
        i = (function (e) {
          return e.filter((e, t) => null !== t.offsetParent);
        })(e(n).find(".dropdown-toggle")),
        o = e(n).data("placement")
          ? e(n).data("placement")
          : "bottom-end",
        a = "_" + Math.random().toString(36).substr(2, 9);
      t(),
        e(r).length &&
          (e(i).attr("aria-expanded", !0),
          "static" == e(n).css("position") &&
            e(n).css("position", "relative"),
          e(r).css("width", e(r).css("width")),
          e(
            '<div data-dropdown-replacer="' + a + '"></div>'
          ).insertAfter(r),
          e(r).attr("id", a).appendTo("body"),
          je(i[0], r[0], { placement: o }),
          e(r).addClass("show"));
    }
    function r(t) {
      if (e(t).find(".dropdown-menu").length)
        e(t)
          .find(".dropdown-menu")
          .attr("data-dropdown-programmatically", "initiate");
      else {
        let t = e("[data-dropdown-replacer]").data("dropdown-replacer");
        e("#" + t).attr("data-dropdown-programmatically", "initiate");
      }
      n(t);
    }
    e("body").on("click", function (r) {
      let i = e(r.target).closest(".dropdown"),
        o = e(i).find(".dropdown-toggle"),
        a = e(i).find(".dropdown-menu").first(),
        s = e(r.target).closest(".dropdown-menu").first(),
        l = e(r.target).data("dismiss");
      (!e(i).length && !e(s).length) ||
      (e(o).length && !e(a).length) ||
      "dropdown" == l
        ? t()
        : e(s).length || n(i);
    }),
      document.addEventListener("keydown", function (e) {
        "Escape" == e.code && t();
      }),
      (e.fn.dropdown = function (n) {
        "show" == n
          ? r(this)
          : "hide" == n
          ? t()
          : "toggle" == n &&
            (function (n) {
              let i = e(n).find(".dropdown-menu").first();
              e(i).length ? r(n) : t();
            })(this);
      });
  });
