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


$(document).on('click',".updateItem",function(event){
  event.preventDefault();
// var id = $("#id").val();
// var qtt = $("#qtt-"+id).val();


// $.ajax({
//   url: 'Yii2/frontend/web/cart/updateform',
//     data :{'id':id,'qtt':qtt},
//     type:'GET' ,
//     success: function(res){
//       $('.myTable').load(location.href+' .myBody');

//     }
//   });

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
 
 
 