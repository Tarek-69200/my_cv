(e=>{let a=e(window),l=e("body"),t=e("#sidebar");if(breakpoints({xlarge:["1281px","1680px"],large:["981px","1280px"],medium:["737px","980px"],small:["481px","736px"],xsmall:[null,"480px"]}),"ie"===browser.name&&l.addClass("is-ie"),a.on("load",()=>{setTimeout(()=>l.removeClass("is-preload"),100)}),e("form").on("click",".submit",a=>{a.stopPropagation(),a.preventDefault(),e(a.currentTarget).parents("form").submit()}),t.length>0){let s=t.find("a");s.addClass("scrolly").on("click",function(){let a=e(this);"#"===a.attr("href").charAt(0)&&(s.removeClass("active"),a.addClass("active").addClass("active-locked"))}).each(function(){let a=e(this),l=a.attr("href"),t=e(l);t.length<1||t.scrollex({mode:"middle",top:"-20vh",bottom:"-20vh",initialize:()=>t.addClass("inactive"),enter(){t.removeClass("inactive"),s.filter(".active-locked").length?a.hasClass("active-locked")&&a.removeClass("active-locked"):(s.removeClass("active"),a.addClass("active"))}})})}e(".scrolly").scrolly({speed:1e3,offset:()=>breakpoints.active("<=large")&&!breakpoints.active("<=small")&&t.length>0?t.height():0})})(jQuery);