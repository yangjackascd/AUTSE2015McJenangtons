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
        localStorage.setItem("searchtest", aSearch);
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
        return true;

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
//adddata in to server and DB
//adddatatoDB.php','paper_title','paper_name','paper_author','paper_year','paper_context','unload_notice
function add(dataSource, title, name, author, year,context,journal,divID) {
    if (xhr) {
        var unload_notice = document.getElementById(divID);
        
        var paper_title = document.getElementById(title).value;
        var paper_name = document.getElementById(name).value;
        var paper_author = document.getElementById(author).value;
        var paper_year = document.getElementById(year).value;
        var paper_context = document.getElementById(context).value;
        var paper_journal = document.getElementById(journal).value;
        var requestbody = "title=" + encodeURIComponent(paper_title) + "&name=" + encodeURIComponent(paper_name) + "&author=" + encodeURIComponent(paper_author)+ "&year=" + encodeURIComponent(paper_year)+ "&context=" + encodeURIComponent(paper_context)+"&journal=" + encodeURIComponent(paper_journal);
        xhr.open("POST", dataSource, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            // alert(xhr.readyState); // to let us see the state of the computation
            if (xhr.readyState == 4 && xhr.status == 200) {
                unload_notice.innerHTML = xhr.responseText;
            } // end if
        }
        xhr.send(requestbody);
    }
}