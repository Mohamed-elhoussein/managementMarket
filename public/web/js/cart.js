$(".add_to_cart").click(function(){
var product_id=$(this).attr("id_product");

    $.ajax({
        url:"addCart",
        method:"POST",
        data:{product_id:product_id,_token:_token},
        success: function(data){
            $(".all_cart").load(location.href +" .all_cart",function(){
                Total();
                deleteItem();

            });
        },

        error:function (error) {
            console.log(error);

        }
    });
});







function Total() {

    var price=document.querySelectorAll("._price");
    var count=document.querySelectorAll("._count");
    var num_item=price.length;

    var total=0;
    for (let i = 0; i < price.length; i++) {

        var total= total+ +price[i].innerHTML*count[i].innerHTML;
    }

    $(".total-amount").html("$ "+total);
    $(".count_item").html(num_item +" Items");
    $(".total-items").html(num_item );

}


Total();



function  deleteItem() {
$(".r_item").click(function(){
    var product_id=$(this).attr("product_id");
    $(this).closest("li").remove();

    $.ajax({
        url:"Delete_item",
        method:"POST",
        data:{product_id:product_id,_token:_token},
        success: function(data){
            Total();
            console.log(data);
        },

        error:function (error) {
            console.log(error);

        }

    })

});
}


deleteItem()
