// $(document).ready(function(){
// $("#deleteItem").click(function(event){

// event.preventDefault();
// var url = $(this).attr("href");
// var id = $(this).data("id");
// $.ajax({
//     url: url,
//     data :{'id':id},
//     type:'GET' ,
//     success: function(res){
//       $('.myTable').load(location.href+' .myBody');

//     }
//   });


// })
 
    
   
//  })

 function deleteItem(id){
url = window.location.href;
   res = url.replace("index", "remove");
   alert(res);
  $.get(res,{'id':id}, function(data){
    $('.myTable').load(url+' .myBody');
  });
 }
 
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
 
 
 