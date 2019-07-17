$(document).ready(function(){
$(document).on('click','.deleteItem',function(event){
event.preventDefault();
var url = $(this).attr("href");
alert(url);
// var id = $(this).data("id");
$.ajax({
    url: url,
    data :{},
    type:'GET' ,
    success: function(res){
      $('.myTable').load(location.href+' .myBody');

    }
  });

})


$(document).on('click',"a.updateItem",function(event){
  event.preventDefault();
  
  var url = $(this).attr("href");
var tt = $(this).attr("tt");
var quantity = $("#qtt-"+tt).val();
console.log(tt);
console.log(quantity);
$.ajax({
  url: url,
  
  data :{tt:tt,update_qtt:quantity},
    type:'GET' ,
    success: function(res){
      console.log(res);
      alert (" update thanh cong")
      $('.myTable').load(location.href+' .myBody');
     
    }
  });
})
 })


 $(document).ready(function(){
   $("#delete_all").click(function(event){
     event.preventDefault();
     url = $(this).attr("href");
     alert(url);
   $.ajax({
      url: url,
      data :{},
      type:'GET' ,
      success: function(res){
        alert("xoa gio hang thanh cong");
        $('.myTable').load(location.href+' .myBody');
      }
})

   })
 })
 
 
 