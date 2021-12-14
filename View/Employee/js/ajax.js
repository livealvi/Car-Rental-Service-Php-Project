function checkName(name) {
  if (name.length < 3) return false;
  else {
    return name.match("^[a-zA-Z]+$");
  }
}

function checkMail(mail) {
  return mail.includes("@") && mail.includes(".com");
}

function checkMobile(mobile) {
  if (mobile.length !== 11) return false;
  else {
    return mobile.match("^[0-9]+$");
  }
}

//Edit ===============
function editUser(user_id) {
  //document.getElementById("display").innerHTML = "";

  let req_err = [];
  let val_err = [];

  let userName = document.getElementById("user_name").value;
  let email = document.getElementById("user_email").value;
  let mobileNo = document.getElementById("user_mobile").value;
  let archiveStatus = document.getElementById("archive_status").checked;
  console.log(archiveStatus);

  if (userName === "") req_err.push("username is required");
  else {
    if (!checkName(userName)) val_err.push("username is not valid");
  }
  if (email === "") req_err.push("email is required");
  else {
    if (!checkMail(email)) val_err.push("email is not valid");
  }
  if (mobileNo === "") req_err.push("mobile number is required");
  else {
    if (!checkMobile(mobileNo)) val_err.push("mobile no is not valid");
  }

  if (req_err.length === 0) {
    const userObj = {
      user_id: user_id,
      archive_status: document.getElementById("archive_status").checked
        ? "Archive"
        : "Not Archive",
      user_name: userName,
      user_email: email,
      user_mobile: mobileNo,
    };
    const userJSON = JSON.stringify(userObj);
    console.log(userJSON);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText === "successful") {
          alert("User Information Updated Successfully");
          window.location.reload();
        } else {
          alert("User Information Could Not Be Edited");
          window.location.reload();
        }
      }
      // else {
      //     setTimeout(function() {}, 10000);
      //     alert("An Unexpected Error Has Occurred");
      //     console.log(this.status);
      // }
    };
    xhttp.open(
      "POST",
      "/project/Car-Rental-Service/Controller/EmployeeController/edit_renter_controller.php",
      true
    );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("x=" + userJSON);

    return false;
  } else {
    let list = document.createElement("ul");
    list.classList.add("error-list");
    for (let i = 0; i < req_err.length; i++) {
      let listItem = document.createElement("h3");
      listItem.appendChild(document.createTextNode(req_err[i]));
      list.appendChild(listItem);
    }
    document.getElementById("display").appendChild(list);
    for (let i = 0; i < val_err.length; i++) {
      let listItem = document.createElement("h3");
      listItem.appendChild(document.createTextNode(val_err[i]));
      list.appendChild(listItem);
    }
    document.getElementById("display").appendChild(list);
    return false;
  }
}

// Delete ===============
function delete_user_by_id(user_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "successful") {
        alert("User Deleted Successfully");
        window.location.reload();
      } else {
        alert("User Could Not Be Deleted");
        window.location.reload();
      }
    } else {
      setTimeout(function () {
        alert("An Unexpected Error Has Occurred");
      }, 10000);
      console.log(this.status);
    }
  };
  xhttp.open(
    "GET",
    "/project/Car-Rental-Service/Controller/EmployeeController/delete_user_controller.php?id=" +
      user_id,
    true
  );
  xhttp.send();
}

function delete_car(car_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "successful") {
        alert("Car Deleted Successfully");
        window.location.reload();
      } else {
        alert("Car Could Not Be Deleted");
        window.location.reload();
      }
    } else {
      setTimeout(function () {
        alert("An Unexpected Error Has Occurred");
      }, 10000);
      console.log(this.status);
    }
  };
  xhttp.open(
    "GET",
    "/project/Car-Rental-Service/Controller/EmployeeController/delete_car_controller.php?id=" +
      car_id,
    true
  );
  xhttp.send();
}

// Search ===============
function search_renter() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "reset") {
        window.location.reload();
        return;
      }

      console.log(this.responseText);

      let table = document.getElementById("renter_table");
      let rows = table.rows.length;

      for (let i = rows - 1; i > 0; i--) {
        table.deleteRow(i);
      }

      if (this.responseText === "empty") {
        document.getElementById("msg").innerHTML = "No Renter Found";
        return;
      }

      document.getElementById("msg").innerHTML = "";

      let result = JSON.parse(this.responseText);

      console.log(result);

      for (let i = 0; i < result.length; i++) {
        let row = table.insertRow(i + 1);
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);
        let cell6 = row.insertCell(5);
        let cell7 = row.insertCell(6);

        cell1.innerHTML = result[i].user_id;
        cell2.innerHTML = result[i].user_name;
        cell3.innerHTML = result[i].user_email;
        cell4.innerHTML = result[i].user_mobile;
        cell5.innerHTML = result[i].archive_status;
        cell6.innerHTML =
          "<img width='75' height='75' src='" +
          result[i].user_img_url +
          "'  alt='' />";
        cell7.innerHTML = "btn";
      }
    }
  };
  xhttp.open(
    "GET",
    "/project/Car-Rental-Service/Controller/EmployeeController/search_renter_controller.php?query=" +
      document.getElementById("search_renter").value,
    true
  );
  xhttp.send();
}

function clearSearchRenter() {
  document.getElementById("search_renter").value = "";
  search_renter();
}

function search_owner() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "reset") {
        window.location.reload();
        return;
      }

      console.log(this.responseText);

      let table = document.getElementById("owner_table");
      let rows = table.rows.length;

      for (let i = rows - 1; i > 0; i--) {
        table.deleteRow(i);
      }

      if (this.responseText === "empty") {
        document.getElementById("msg").innerHTML = "No Owner Found";
        return;
      }

      document.getElementById("msg").innerHTML = "";

      let result = JSON.parse(this.responseText);

      console.log(result);

      for (let i = 0; i < result.length; i++) {
        let row = table.insertRow(i + 1);
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);
        let cell6 = row.insertCell(5);
        let cell7 = row.insertCell(6);

        cell1.innerHTML = result[i].user_id;
        cell2.innerHTML = result[i].user_name;
        cell3.innerHTML = result[i].user_email;
        cell4.innerHTML = result[i].user_mobile;
        cell5.innerHTML = result[i].archive_status;
        cell6.innerHTML =
          "<img width='75' height='75' src='" +
          result[i].user_img_url +
          "'  alt='' />";
        cell7.innerHTML = "btn";
      }
    }
  };
  xhttp.open(
    "GET",
    "/project/Car-Rental-Service/Controller/EmployeeController/search_owner_controller.php?query=" +
      document.getElementById("search_owner").value,
    true
  );
  xhttp.send();
}

function clearSearchOwner() {
  document.getElementById("search_owner").value = "";
  search_owner();
}

function search_car() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "reset") {
        window.location.reload();
        return;
      }

      console.log(this.responseText);

      let table = document.getElementById("car_table");
      let rows = table.rows.length;

      for (let i = rows - 1; i > 0; i--) {
        table.deleteRow(i);
      }

      if (this.responseText === "empty") {
        document.getElementById("msg").innerHTML = "No Car Found";
        return;
      }

      document.getElementById("msg").innerHTML = "";

      let result = JSON.parse(this.responseText);

      console.log(result);

      for (let i = 0; i < result.length; i++) {
        let row = table.insertRow(i + 1);
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);
        let cell6 = row.insertCell(5);
        let cell7 = row.insertCell(6);

        cell1.innerHTML = result[i].car_id;
        cell2.innerHTML = result[i].car_model_name;
        cell3.innerHTML = result[i].owner_id;
        cell4.innerHTML = result[i].car_reg_no;
        cell5.innerHTML = result[i].is_available;
        cell6.innerHTML = result[i].car_img_url;
        "<img width='75' height='75' src='" +
          result[i].user_img_url +
          "'  alt='' />";
        cell7.innerHTML = "btn";
      }
    }
  };
  xhttp.open(
    "GET",
    "/project/Car-Rental-Service/Controller/EmployeeController/search_car_controller.php?query=" +
      document.getElementById("search_car").value,
    true
  );
  xhttp.send();
}

function clearSearchCar() {
  document.getElementById("search_car").value = "";
  search_car();
}
