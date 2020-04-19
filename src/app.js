/************************************************/
    //jquery dom ready begins here
/***************************************************/
$(document).ready(function () {


/************************************************/
       //fetches the width of elements into a variable
/***************************************************/
    var w = $('.search').width();
    var h = $('.search').height();
    var hid = $('#search').width();

   // console.log(w);
   // console.log(h);
   // console.log('search text area');
   // console.log(hid);
   // alert('hi');

var nh = $('.search').css('height');

/********************************************************/
    //gets the positon of the search element into a variable
/*********************************************************/
    var position = $('.search').position();
    var top = position.top;
    var left = position.left;
    console.log(top);
    console.log(left);


        console.log('ready to rezie elememt');   
   // console.log('calling changewidth....');  
        changewidth();


/**************************************************************/
    //infinite loop begins here
/**************************************************************/
        var refreshpage = 1;
    setInterval(function () {

        //change the element width when the screen size changes
        setelementpos();
        refreshpage++; 

        //refreshes the page when max time is reached
       // console.log(refreshpage);
        refresh(refreshpage);
    }, 100);  


    $('.btn').click(function (e) { 
        console.log('button clicked');

        e.preventDefault();
      //  $('.btn').css('left', '200px');

        console.log('pos changed');


        });

      
  
/************************************************/
    //refreshes the page after 2000 miliseconds
/***************************************************/
function refresh(refreshpage) {  

        if (refreshpage > 5000) {
        window.location.reload();
      //  alert('reload page');
        refreshpage = 1;
        }

}
/************************************************/
    //reads the widwo width, ajust element pos accordingly
/***************************************************/
function setelementpos(params) {
    var media1 = $(window).width();
   // console.log('window location');
   // console.log(media1);
    if (media1 <= 400) {
        $('#search').css('width', '100px');
        $('body').css('background-color', 'green');
      //  $('.btn').css('left', '20px');

       // console.log('width is now 40px');
        var hid = $('#search').width();
       // console.log(' new search text area');
       // console.log(hid);

    } else {
        $('#search').css('width', '400px');
        $('body').css('background-color', 'lightblue');
       // console.log('width is now 400px');
        var hid = $('#search').width();
       // console.log(' new search text area');
       // console.log(hid);

    }
    
}
/************************************************/
    //changes the width of element if value changes
/***************************************************/
        function changewidth(params) {
            var value = $('.value').width();
          // // console.log(value);
            if (value <= 450) {
                $('#search').css('width', '100px');
               //// console.log('width is now 40px');
                var hid = $('#search').width();
               //// console.log(' new search text area');
               //// console.log(hid);

            }
            else {
                $('#search').css('width', '400px');
               // console.log('width is now 400px');
                var hid = $('#search').width();
               // console.log(' new search text area');
               // console.log(hid);

            }

            
        }



  




















































});