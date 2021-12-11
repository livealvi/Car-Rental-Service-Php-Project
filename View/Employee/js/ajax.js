function delete_user_by_id(user_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "successful") {
        alert("User deleted successfully");
        window.location.reload();
      } else {
        alert("User could not be deleted");
        window.location.reload();
      }
    } else {
      setTimeout(function () {
        alert("An unexpected error has occurred");
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

function search_user() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "reset") {
        // alert("User deleted successfully");
        window.location.reload();
        return;
      }

      console.log(this.responseText);

      let table = document.getElementById("user_table");
      let rows = table.rows.length;
      // console.log(rows);

      for (let i = rows - 1; i > 0; i--) {
        table.deleteRow(i);
      }

      if (this.responseText === "empty") {
        document.getElementById("msg").innerHTML = "No users found";
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
    "/project/Car-Rental-Service/Controller/EmployeeController/search_user_controller.php?query=" +
      document.getElementById("search_user").value,
    true
  );
  xhttp.send();
}

function clearQuery() {
  document.getElementById("search_user").value = "";
  search_user();
}
