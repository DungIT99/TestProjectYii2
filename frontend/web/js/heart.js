$(document).ready(function(){
    $("#addHeart").click(function(event){
    event.preventDefault();
    var url = $(this).attr("href");
    var id = $(this).data('id');
$.ajax({
url:url,
data:{'id':id},
type:'GET',
success:function(){
alert("ban da them san pham vao muc ua thich");
}

})

    })
})