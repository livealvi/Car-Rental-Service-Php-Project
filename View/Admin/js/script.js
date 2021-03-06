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
                window.location.reload()
            }
        }
        else
        {
            setTimeout(function() { alert("An unexpected error has occurred") }, 10000)
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
                window.location.reload()
            }
        }
        else
        {
            setTimeout(function() { alert("An unexpected error has occurred") }, 10000)
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
                window.location.reload()
            }
        }
        else
        {
            setTimeout(function() { alert("An unexpected error has occurred") }, 10000)
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
    if (mobile.length !== 11) return false
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
    let isAvailable = document.getElementById('isAvailable').value

    if(ownerId === '') reqErr.push('Owner Id is required')
    if(carModel=== '') reqErr.push('Model of the car is required')
    if(regNo=== '') reqErr.push('Registration number of the car is required')
    if(isAvailable === '') reqErr.push('Availability information is required')

    if (reqErr.length === 0) {
        const carObj = {
            car_id: editCarId,
            owner_id: ownerId,
            car_model_name: carModel,
            car_reg_no: regNo,
            is_available: isAvailable
        }
        const carJSON = JSON.stringify(carObj)
        console.log(carJSON)
        var xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText === 'successful'){
                    alert('Car information updated successfully')
                    window.location.reload()
                }
                else{
                    alert('Car information could not be edited')
                    window.location.reload()
                }
            }
            else
            {
                setTimeout(function() { alert("An unexpected error has occurred") }, 10000)
                console.log(this.status)
            }
        }
        xhttp.open("POST", "/Car-Rental-Service/Controller/AdminController/edit_car_handler.php", true)
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhttp.send("x=" + carJSON)
        return false
    }
    else{
        let list = document.createElement('ul')
        list.classList.add('error-list')
        for (let i = 0; i < reqErr.length; i++) {
            let listItem = document.createElement('h3')
            listItem.appendChild(document.createTextNode(reqErr[i]))
            list.appendChild(listItem)
        }
        document.getElementById('display').appendChild(list)
        return false
    }
}

function editUser(editUserId){
    document.getElementById('display').innerHTML = ''

    let reqErr = []
    let valErr = []

    let userName = document.getElementById('userName').value
    let email = document.getElementById('email').value
    let mobileNo = document.getElementById('mobileNo').value

    if(userName === '')reqErr.push('User name is required')
    else{
        if(!testName(userName)) valErr.push('User Name is not valid')
    }
    if(email === '') reqErr.push('email is required')
    else{
        if(!testMail(email)) valErr.push('Email is not valid')
    }
    if(mobileNo === '') reqErr.push('Mobile number is required')
    else{
        if(!testMobile(mobileNo)) valErr.push('Mobile no is not valid')
    }

    if (reqErr.length === 0 && valErr.length === 0) {
        const userObj = {
            user_id: editUserId,
            archive_status: 'Not Archive',
            user_name: userName,
            user_email: email,
            user_mobile: mobileNo
        }
        const userJSON = JSON.stringify(userObj)
        console.log(userJSON)
        var xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText === 'successful'){
                    alert('User information updated successfully')
                    window.location.reload()
                }
                else{
                    alert('User information could not be edited')
                    window.location.reload()
                }
            }
            else
            {
                setTimeout(function() { alert("An unexpected error has occurred") }, 10000)
                console.log(this.status)
            }
        }
        xhttp.open("POST", "/Car-Rental-Service/Controller/AdminController/edit_user_handler.php", true)
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhttp.send("x=" + userJSON)
        return false
    }
    else{
        let list = document.createElement('ul')
        list.classList.add('error-list')
        for (let i = 0; i < reqErr.length; i++) {
            let listItem = document.createElement('h3')
            listItem.appendChild(document.createTextNode(reqErr[i]))
            list.appendChild(listItem)
        }
        document.getElementById('display').appendChild(list)
        for (let i = 0; i < valErr.length; i++) {
            let listItem = document.createElement('h3')
            listItem.appendChild(document.createTextNode(valErr[i]))
            list.appendChild(listItem)
        }
        document.getElementById('display').appendChild(list)
        return false
    }
}

function editBooking(editBookingID){
    document.getElementById('display').innerHTML = ''

    let reqErr = []

    let carId = document.getElementById('carId').value
    let ownerId = document.getElementById('ownerId').value
    let renterId = document.getElementById('renterId').value
    let employeeId = document.getElementById('employeeId').value
    let rentDate = document.getElementById('rentDate').value
    let rentReturnDate = document.getElementById('rentReturnDate').value

    if(carId === '') reqErr.push('Car Id is required')
    if(ownerId === '') reqErr.push('Owner Id is required')
    if(renterId === '') reqErr.push('Renter Id is required')
    if(employeeId === '') reqErr.push('Employee Id is required')
    if(rentDate === '') reqErr.push('Rent date is required')
    if(rentReturnDate === '') reqErr.push('Rent return date is required')

    if (reqErr.length === 0) {
        const bookingObj = {
            rent_id: editBookingID,
            car_id: carId,
            owner_id: ownerId,
            renter_id: renterId,
            employee_id: employeeId,
            rent_date: rentDate,
            rent_return_date: rentReturnDate
        }
        const bookingJSON = JSON.stringify(bookingObj)
        console.log(bookingJSON)
        var xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText === 'successful'){
                    alert('Booking information updated successfully')
                    window.location.reload()
                }
                else{
                    alert('Booking information could not be edited')
                    window.location.reload()
                }
            }
            else
            {
                setTimeout(function() { alert("An unexpected error has occurred") }, 10000)
                console.log(this.status)
            }
        }
        xhttp.open("POST", "/Car-Rental-Service/Controller/AdminController/edit_booking_handler.php", true)
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhttp.send("x=" + bookingJSON)
        return false
    }
    else{
        let list = document.createElement('ul')
        list.classList.add('error-list')
        for (let i = 0; i < reqErr.length; i++) {
            let listItem = document.createElement('h3')
            listItem.appendChild(document.createTextNode(reqErr[i]))
            list.appendChild(listItem)
        }
        document.getElementById('display').appendChild(list)
        return false
    }
}
