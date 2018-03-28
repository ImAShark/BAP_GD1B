<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thomas the Search Engine</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>


<h1>Overwatch and Borderlands Character search</h1>

<h3>Search characters from games:</h3>

<form action="">
    Character: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>

<p>Suggestions:<br> <span id="txtHint"></span></p>

<script>
    function showHint(str) {
        var xhttp;
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "gethint.php?q="+str, true);
        xhttp.send();
    }
</script>

</body>
</html>
