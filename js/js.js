function SubmitFormData() {
    window.alert("Click OK to continue");
    var oid = $("#oid").val();
    var pid = $("#pid").val();
    var pname = $("#pname").val();
    var weight = $("#pweight").val();
    var quantity = $("#pQuantity").val();
    var date = $("#pOrderDate").val();
    var branch = $("#pBranch").val();
    $.post("SubmitOrder.php", {oid:oid, pid:pid, pname:pname, weight: weight, quantity: quantity, date:date, branch:branch},
    function(data) {
	 $('#results').html(data);
	 $('#myForm')[0].reset();
    });
    alert("Updated");
    changeContent();
}
function changeContent(){
    alert("as");
    $.post("ChangeContent.php",
    function(data) {
     $('#Content').html(data);
	 $('#myForm')[0].reset();     
    });
}



function myFunction(){
    var productID = parseInt(document.getElementById("pid").value);
    switch(productID){
        case 12080:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Biryani Masala";
            document.getElementById("pweight").value = "100 g";
            document.getElementById("pOrderDate").value = date;
            break;
        case 12081:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Biryani Masala";
            document.getElementById("pweight").value = "50 g";
            document.getElementById("pOrderDate").value = date;
            break;
        case 12085:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Custard";
            document.getElementById("pweight").value = "100 g";
            document.getElementById("pOrderDate").value = date;
            break;
        case 12086:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Custard";
            document.getElementById("pweight").value = "50 g";
            document.getElementById("pOrderDate").value = date;
            break;
        case 12090:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Ketchup";
            document.getElementById("pweight").value = "1 Kg";
            document.getElementById("pOrderDate").value = date;
            break;
        case 12091:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Ketchup";
            document.getElementById("pweight").value = "0.5 Kg";
            document.getElementById("pOrderDate").value = date;
            break;
        case 12095:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Pickle";
            document.getElementById("pweight").value = "1 Kg";
            document.getElementById("pOrderDate").value = date;
            break;
        case 12096:
            var d = new Date();
            var month = d.getMonth()+1;
            var date= d.getDate()+"-"+month+"-"+d.getFullYear();
            document.getElementById("pname").value = "Pickle";
            document.getElementById("pweight").value = "0.5 Kg";
            document.getElementById("pOrderDate").value = date;
            break;
    }
}