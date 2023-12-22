<script type="text/javascript">
    function get_page(act2){
        var xhr = false; 
        if(window.XMLHttpRequest){
            xhr = new XMLHttpRequest(); 
        }else{
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }

        if(xhr){
            xhr.onreadystatechange = function (){
                if(xhr.readyState == 4 && xhr.status == 200){
                    document.getElementById("statediv").innerHTML = xhr.responseText;

                }
            }
            xhr.open("POST","act2.php",   true)
            xhr.send(null);
        }
    }



</script>