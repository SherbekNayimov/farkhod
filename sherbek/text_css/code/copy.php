<!DOCTYPE html>
<html>
<body>


<input type="text" value="Hello World" id="myInput">
<button onclick="myFunction()">Copy text</button>


<script>
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);
    }
</script>

</body>
</html>
