var xhr = createRequest();

function getData(dataSource, divID, aAccount, aPassword) {
    if (xhr) {
        var obj = document.getElementById(divID);
        var requestbody = "account=" + encodeURIComponent(aAccount) + "&pwd=" + encodeURIComponent(aPassword);

        xhr.open("POST", dataSource, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            // alert(xhr.readyState); // to let us see the state of the computation
            if (xhr.readyState == 4 && xhr.status == 200) {
                obj.innerHTML = xhr.responseText;
            } // end if
        } // end anonymous call-back function
        xhr.send(requestbody);
    } // end if
} // end function getData()

function searchData(dataSource, divID, aSearch) {
    if (xhr) {
        var obj = document.getElementById(divID);
        var requestbody = "search=" + encodeURIComponent(aSearch);

        xhr.open("POST", dataSource, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            // alert(xhr.readyState); // to let us see the state of the computation
            if (xhr.readyState == 4 && xhr.status == 200) {
                obj.innerHTML = xhr.responseText;
            } // end if
        } // end anonymous call-back function
        xhr.send(requestbody);

    } // end if   
}
function onrunsearch(dataSource, divID) {
    if (xhr) {
        var obj = document.getElementById(divID);
        var searchr = localStorage.getItem("searchtest");
        var requestbody = "search=" + searchr;
        xhr.open("POST", dataSource, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            // alert(xhr.readyState); // to let us see the state of the computation
            if (xhr.readyState == 4 && xhr.status == 200) {
                obj.innerHTML = xhr.responseText;
            } // end if
        } // end anonymous call-back function
        xhr.send(requestbody);
    }
}
//senddata to new page to run JS
function senddata() {
    // Getting the value of your text input
    var mysearch = document.getElementById("searchbar").value;
    // Storing the value above into localStorage
    localStorage.setItem("searchtest", mysearch);
    return true;
}
