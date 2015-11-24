$("select").on("click" , function() {
  
  $(this).parent(".custom-select").toggleClass("open");
  
});

$(document).mouseup(function (e)
{
    var container = $(".custom-select");

    if (container.has(e.target).length === 0)
    {
        container.removeClass("open");
    }
});


$("select").on("change" , function() {
  
  var selection = $(this).find("option:selected").text(),
      labelFor = $(this).attr("id"),
      label = $("[for='" + labelFor + "']");
    
  label.find(".selection-choice").html(selection);
    
});