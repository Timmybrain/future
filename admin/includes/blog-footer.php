<div id="logOutMessage" style="display: none">Do you want to logout?</div>
<footer>
    <div class="card-panel footer-copyright center pink white-text">
        <p class="flow-text">&copy; <?= date('Y') ?> 
        <a class="yellow-text" href="http://www.fxnigeria.com">FutureX Media</a>
        </p>
    </div>  
</footer>
</body>
<script type="text/javascript">
    $(document).ready( function () {
        $("#logOutMessage").dialog({
        draggable: true,
        resizable: false,
        height: 300,
        width: 300,
        modal: true,
        position: {
            my: "center center",
            at: "center center",
            of: "body"
        },
        show: 1000,
        hide: 1000,
        autoOpen: false,
        buttons: {
            "YES": function () { 
                //$("#openDialog").html("You clicked okay");
                window.location.href = "logout.php";
            },
             "NO": function () { 
                 //$("#openDialog").html("You clicked CANCEL");
                 $(this).dialog("close");
            }
        }

    });

    $(".collection div.collection-item").click( function () { 
        $.post()
     })

    $("#logOut").click(function () { 
        $("#logOutMessage").dialog("open");
     });

     //handle the event
     $("#getNews").click( function () {
         var query = $("#getNews").attr("title");
         queryServer(query);
     });
});

//get the content from server
function queryServer(query) {
    $.ajax({
        type: "GET",
        url: "error.php?q=" + query,
        success: embedContent
   });
}
//put the content into the tag
function embedContent(data, status) { 
    $("#content").html(data);
 }


</script>