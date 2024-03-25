

$(document).ready(function(){
    displayData();
});

//display function
function displayData() {
    var displayData = "true";
    $.ajax({
        url: "display.php",
        type: 'post',
        data: {
            displaySend: displayData
        },
        success: function(data, status) {
            $('#displayDataTable').html(data);
        },
         error: function(xhr, status, error) {
            console.error("Error fetching data:", error);
            // Optionally, display an error message to the user
        }
    });
}

// Function to add a new user
function adduser() {
    var nameAdd = $('#completename').val();
    var emailAdd = $('#completeemail').val();
    var mobileAdd = $('#completemobile').val();
    var placeAdd = $('#completeplace').val();

    $.ajax({
        url: "insert.php",
        type: 'post',
        data: {
            nameSend: nameAdd,
            emailSend: emailAdd,
            mobileSend: mobileAdd,
            placeSend: placeAdd
        },
        success: function(data, status) {
            // Reload data after successful addition
            $('#exampleModal').modal('hide');
        
            displayData();
        },
         error: function(xhr, status, error) {
            console.error("Error fetching data:", error);
            // Optionally, display an error message to the user
        }
    });
}

// Define the GetDetails function

function GetDetail(updateid) {
    $('#hiddendata').val(updateid);

    // Use POST to load the data from the server
    $.post("update.php", {updateid: updateid}, function(data, status) {
        var userid = JSON.parse(data);
        $('#updatename').val(userid.name);
        $('#updateemail').val(userid.email);
        $('#updatemobile').val(userid.mobile);
        $('#updateplace').val(userid.place);
    });

    $('#UpdateModal').modal("show");
}





//delete record

function DeleteUser(deleteid) {
    $.ajax({
        url:"delete.php",
        type:'post',
        data:{
            deletesend:deleteid
        },
        success:function(data, status){
            displayData();
        },
        error: function(xhr, status, error) {
            console.error("Error fetching data:", error);
            // Optionally, display an error message to the user
        }
    });
}



