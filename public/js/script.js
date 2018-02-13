$(".modalDelete").click(function(){
    id=$(this).data("id");
    var name=$(this).data("name");
    var nodeName=document.createElement("p");
    var nameNode=document.createTextNode("¿Seguro que desea eliminar la cuenta "+name+"?");
    nodeName.appendChild(nameNode);
    $("#bodyDelete").empty();
    document.getElementById("bodyDelete").appendChild(nodeName);
});

function deleteUser(){

    var token = $("#token").val();
    $.ajax({
        url: "/users/"+id,
        headers: {'X-CSRF-TOKEN': token},
        type: "DELETE",

        success: function() {
            window.location = "/users/";
            $("#message").fadeIn();
        }
    });
}
