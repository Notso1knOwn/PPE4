$(".Id-mdp input").on("focus",function(){
  $(this).addClass("focus");
});

$(".Id-mdp input").on("blur",function(){
  if($(this).val() == "")
  $(this).removeClass("focus");
});
