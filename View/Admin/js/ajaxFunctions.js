function deleteCar(id){
    var xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText === 'successful'){
                alert('Car deleted successfully')
                window.location.reload()
            }
            else{
                alert('Car could not be deleted')
            }
        }
        else
        {
            alert('Unexpected error occurred')
            console.log(this.status)
        }
    }
    xhttp.open("GET", "/Car-Rental-Service/Controller/AdminController/delete_car_handler.php?id="+id, true)
    xhttp.send()
}

function deleteUser(id){
    var xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText === 'successful'){
                alert('User deleted successfully')
                window.location.reload()
            }
            else{
                alert('User could not be deleted')
            }
        }
        else
        {
            alert('Unexpected error occurred')
            console.log(this.status)
        }
    }
    xhttp.open("GET", "/Car-Rental-Service/Controller/AdminController/delete_user_handler.php?id="+id, true)
    xhttp.send()
}

function deleteBooking(id){
    var xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText === 'successful'){
                alert('Booking deleted successfully')
                window.location.reload()
            }
            else{
                alert('Booking could not be deleted')
            }
        }
        else
        {
            alert('Unexpected error occurred')
            console.log(this.status)
        }
    }
    xhttp.open("GET", "/Car-Rental-Service/Controller/AdminController/delete_booking_handler.php?id="+id, true)
    xhttp.send()
}