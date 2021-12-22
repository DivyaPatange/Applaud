<script src="{{asset('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- bootstarp min js  -->
<script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js')}}" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js')}}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- uploads -->
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
  
<script src="{{asset('https://code.jquery.com/jquery-3.6.0.js')}}" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!-- //sidebar -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
    if(sidebar.classList.contains("open")){
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-left");//replacing the iocns class
    }else {
    closeBtn.classList.replace("bx-menu-alt-left","bx-menu");//replacing the iocns class
    }
    }
</script>

<!--//marketplace -->
<script>
        function show() {
    document.getElementById('overlay_div').style.display = "block";
        }
        function hide() {
    document.getElementById('overlay_div').style.display = "none";
        }
</script>
<!------------->

<!--//merchandise-->
<script>
    function show1() {
        document.getElementById('tbl').style.display = "block";
        document.getElementById('tbl_hide_img').style.display = "none";
         }
         
    function hide1() {
        document.getElementById('tbl').style.display = "none";
        document.getElementById('tbl_hide_img').style.display = "block";
        }
</script>


<!--//searchbox-->
<script>
    $(document).ready(function() {

        $('.btnclck').click(function() { 
            var id = $(this).html();
            var screentext = $('#searchbox').attr('value') + id;
            $('#searchbox').attr( "value", screentext);
        });

        $('.spacebtn').click(function() {
          var screentext = $('#searchbox').attr('value') + " ";
          $('#searchbox').attr( "value", screentext);
        });

        $('.dltbtn').click(function() {
          var screentext = $('#searchbox').attr('value');
          var dltfnt = screentext.substring(0,screentext.length - 1);
          $('#searchbox').attr('value', dltfnt);
        });

        $('.clrebtn').click(function() {
          $('#searchbox').attr( "value", "");
        });
    });
</script>
<!------------->


<script src="{{asset('assets/js/intlTelInput.js')}}"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "{{asset('assets/js/utils.js')}}",
    });
</script>
