$(document).ready(function () {
    
   
   
  
    $(".cong").click(function () {
        tt = $(this).attr("tt");
        var a = parseInt($("input#qtt-"+tt).val());
        var price = parseFloat($("#price-"+tt).text())
        a += 1;
        $("input#qtt-"+tt).val(a);
        var t = price *a;
       $("#tt-"+tt).text(t); 
    })
    $(".tru").click(function () {
        tt = $(this).attr("tt");
     var qtt =parseFloat( $("#qtt-"+tt).val());
     var price = parseFloat($("#price-"+tt).text());
        if (qtt > 0) {
            qtt -= 1
            $("#qtt-"+tt).val(qtt);
            var t = price *qtt;
            $("#tt-"+tt).text(t); 
        } else {
             
           
        }
    })


})
