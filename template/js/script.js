$(document).ready(function()
{
    $(".add-to-cart").click(function ()
    {
        var id = $(this).attr("data-id");

        $.post("/cart/addAjax/"+id, {}, function (data)
        {
            $("#cart-count").html(data);

        });
        return false;
    });
});


        $.ajax({

            url: '/cart/addAjax/'+id,
            method: 'post',
            dataType: 'html',
            data: {},
            success: function(data){
                $("#cart-count").html(data);
            }
        });
