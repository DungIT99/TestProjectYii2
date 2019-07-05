$(document).ready(function(){
   $(".addCart").click(function(event){
    event.preventDefault();
    // $("#modal-id").modal("show");
var url = $(this).attr("href");
var name = $(this).data("name");
// console.log(url);
// console.log(name);
    $.ajax({
        url: url,
        type: 'GET',
        data: {},
        success:function (res) {
            if(res=="ok"){
               $("#datHang").html("san pham "+name+" da them vao gio hang");
              
                $("#modal-id").modal("show");
            }else{
                $("#datHang").html("san pham da het hang");
                $("#modal-id").modal("show");
            }
           
        }
   })


   })


   
  
})




{/* <a class="addCart" href="/Yii2/frontend/web/demo/view?name=san+pham+2" data-name="san pham 2">cart</a> */}