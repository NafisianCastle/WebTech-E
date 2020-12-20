function search(str) {
    var xhttp;
    if (str == "") {
        document.getElementById("normalTable").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("normalTable").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "searchResults.php?q=" + str, true);
    xhttp.send();
}