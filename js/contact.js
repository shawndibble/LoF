jQuery(document).ready(function(){
  $("#contactform").submit(function(){
    var e=$(this).attr("action");
    return $("#message").slideUp(750,function(){
      $("#message").hide(),
      $("#submit").after('<img src="images/loader.gif" class="loader" />').attr("disabled","disabled"),
      $.post(e,{
        name:$("#name").val(),
        email:$("#email").val(),
        subject:$("#subject").val(),
        comments:$("#comments").val(),
        recaptcha:$("#g-recaptcha-response").val()
      },function(e){
        document.getElementById("message").innerHTML=e,
        $("#message").slideDown("slow"),
        $("#contactform img.loader").fadeOut("slow",function(){
          $(this).remove()
        }),
        $("#submit").removeAttr("disabled"),
        null!=e.match("success")&&$("#contactform").slideUp("slow")
      })
    }),!1
  })
});
