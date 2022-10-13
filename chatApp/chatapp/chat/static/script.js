$(document).ready(function(){
    $(".msg").fadeIn("100");
    $(".msg").animate({left:'5px'});

})
$(document).ready(function(){
    $("h5").fadeIn("100");
    $("h5").animate({left:'5px'});
})

function saveButton(){
    document.getElementById("saveBtn").style.display = "inline";
    document.getElementById("chatnameInput").style.display = "inline";
    document.getElementById("chatnameText").style.display = "none";
}
function validateInputMsg(){
    let sender = document.getElementById("sender").value;
    let msg = document.getElementById("message").value;
    if(sender && msg){
        document.getElementById("chatsendbtn").disabled = false;
    }else{
        document.getElementById("chatsendbtn").disabled = true;
    }
}