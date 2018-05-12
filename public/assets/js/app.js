//ajax functionality added

$("document").ready(function () {

    $(".btn-danger").on("click", function () {
        var pageId = $(this).attr("id");
      
        var confirmed=confirm("Are you sure you want to delete this  record?");

        if (confirmed){

       $.get("ajax/list.php", {id: pageId});
           
       
       //$("#table"+pageId).remove();
            alert('Record Deleted');

            $("#row_"+pageId).remove();
        }





    })









});
