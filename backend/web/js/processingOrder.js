
$(document).ready(function(){
   $(document).on('click','.duyet',function(event){
event.preventDefault();
// alert("demo")
var id = $(this).attr("id");
$.ajax({
  type:'get',
  data :{id:id,status:1},
  url :'/Yii2/backend/web/order/duyethang',
  success:function(res){ 
    $(".myTable").load(location.href + ' .updateTable');
  }
})

   });

   $(document).on('click','.boduyet',function(event){
event.preventDefault();
// alert("demo")
var id = $(this).attr("id");
$.ajax({
  type:'get',
  data :{id:id,status:0},
  url :'/Yii2/backend/web/order/boduyet',
  success:function(res){ 
    $(".myTable").load(location.href + ' .updateTable');
  }
})

   })
   $(document).on('click','.giaohang',function(event){
event.preventDefault();
// alert("demo")
var id = $(this).attr("id");
$.ajax({
  type:'get',
  data :{id:id,status:2},
  url :'/Yii2/backend/web/order/giaohang',
  success:function(res){ 
    $(".myTable").load(location.href + ' .updateTable');
  }
})
   })
})

