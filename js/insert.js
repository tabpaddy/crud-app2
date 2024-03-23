//display function
function displayData() {
    var displayData = "true";
    $.ajax({
        url:"display.php",
        type:'post',
        data:{
            displaySend:displayData
        },
        success:function(data, status){
            $('#displayDataTable').html(data);
        }
    })
}


function adduser() {
    var nameAdd = $('#completename').val()
    var emailAdd = $('#completeemail').val()
    var mobileAdd = $('#completemobile').val()
    var placeAdd = $('#completeplace').val()

    $.ajax({
        url:"insert.php",
        type:'POST',
        data:{
            nameSend:nameAdd,
            emailSend:emailAdd,
            mobileSend:mobileAdd,
            placeSend:placeAdd
        },
        success:function(data, status){
            //function to display data
            console.log(status);
            displayData();
        }
    })
}