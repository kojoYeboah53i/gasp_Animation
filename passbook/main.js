$(function(){

    //$("#pi1").hide();
    
    






    



    $(".ub").click(function(params) {
        

        var id = this.id;
        var main = id.split(":");
        var identity = main[1];

        $.ajax({
            url:'route.php?func=update_status',
            method:'post',
            dataType:"text",
            data:{id:identity},
            beforeSend:function () {
                
            },
            success:function (res) {
                 
            }
        })


    })
    

  $("#order").click(function (params) {
          $("#pi1").fadeIn(300);
          var name = $("#order").val();
          $('.title').html(name);

  })

    $("#order2").click(function (params) {
        $("#pi1").fadeIn(300);
        var name = $("#order2").val();
        $('.title').html(name);

  })
    $("#order3").click(function (params) {
    $("#pi1").fadeIn(300);
    var name = $("#order3").val();
    $('.title').html(name);

  })
   $("#order4").click(function (params) {
    $("#pi1").fadeIn(300);
    var name = $("#order4").val();
    $('.title').html(name);

})

   




$("#adds").click(function (e) {
    e.preventDefault();

    $.ajax({
        url:"../route.php?func=add",
        method:'post',
        dataType:'text',
        data:$("#staffform").serialize(),
        beforeSend:function (params) {
            
        },
        success:function (response) {
            $(".msg").html(response)
        }
    })
})


$('$print').click(function (){
  
        //Hide all other elements other than printarea.
        $("#printarea").show();
 

}







        $("#login").click(function (e) {

                e.preventDefault();
            
                $.ajax({
                    url:"route.php?func=data",

                    method:'post',
                    dataType:'text',
                    data:$("#logform").serialize(),
                    beforeSend:function (params) {
                        
                    },
                    success:function (response) {
                        $(".msg").html(response)
                    }
                })
        })







    

    $("#signupsss").click(function (e) {

        e.preventDefault();
   
        $.ajax({
            url:"../route.php?func=signups",
            method:'post',
            dataType:'text',
            data:$("#su").serialize(),
            beforeSend:function (params) {

            },
            success:function (response) {
                $(".msg").html(response)
            }
        })
})


$("#cid").keyup(function (e) {

    e.preventDefault();

    $.ajax({
        url:"../route.php?func=live",
        method:'post',
        dataType:'text',
        data:$("#collect").serialize(),
        beforeSend:function (params) {

        },
        success:function (response) {
            $(".dis").html(response)
        }
    })
})


    

});