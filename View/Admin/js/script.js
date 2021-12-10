function deleteCar(carId){
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
    xhttp.open("GET", "/Car-Rental-Service/Controller/AdminController/delete_car_handler.php?id="+carId, true)
    xhttp.send()
}

function deleteUser(userId){
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
    xhttp.open("GET", "/Car-Rental-Service/Controller/AdminController/delete_user_handler.php?id="+userId, true)
    xhttp.send()
}

function deleteBooking(bookingId){
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
    xhttp.open("GET", "/Car-Rental-Service/Controller/AdminController/delete_booking_handler.php?id="+bookingId, true)
    xhttp.send()
}

function testName(name) {
    if (name.length < 1) return false
    else {
        return name.match('^[a-zA-Z]+$')
    }
}

function testMail(mail) {
    return (mail.includes('@') && mail.includes('.com'))
}

function testMobile(mobile){
    if (mobile.length < 11) return false
    else{
        return name.match('^[0-9]+$')
    }
}

function editCar(editCarId){
    document.getElementById('display').innerHTML = ''

    let reqErr = []

    let ownerId = document.getElementById('ownerId').value
    let carModel = document.getElementById('carModel').value
    let regNo = document.getElementById('regNo').value

    if(ownerId === '') reqErr.push('Owner Id is required')
    if(carModel=== '') reqErr.push('Model of the car is required')
    if(regNo=== '') reqErr.push('Registration number of the car is required')

    if (reqErr.length === 0){
        console.log(editCarId)
        return false
    }
    else{
        let list = document.createElement('ul')
        list.classList.add('error-list')
        for (let i = 0; i < reqErr.length; i++) {
            let listItem = document.createElement('li')
            listItem.appendChild(document.createTextNode(reqErr[i]))
            list.appendChild(listItem)
        }
        document.getElementById('display').appendChild(list)
        return false
    }
}
