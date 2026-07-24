function validateForm(){

    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let seats = document.getElementById("seats").value;
    let Traveldate = document.getElementById("date").value;

    if(name==""){
        alert("Passenger Name is required.");
        return false;
    }

    if(phone==""){
        alert("Phone Number is required.");
        return false;
    }

    if(seats=="" || seats<=0){
        alert("Number of Seats must be greater than zero.");
        return false;
    }

    let today = new
    date().tolsostring().split("T")[0];

    if(date < today){
        alert("Travel date cannot be in the past");
        return false;
    }

    alert("Validation Successful!");
    return true;
}