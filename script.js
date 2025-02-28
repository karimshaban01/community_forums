function loadDistrict(){
                var data = document.getElementById("region");
                var district = document.getElementById("dropdown");
                district.innerHTML='<option value="">--select a district--</option>';
                var region = data.value;
                
            $(document).ready(function(){
                var xhttp = new XMLHttpRequest();
                xhttp.onload = function (){
                   var district = this.responseText;                   
                   var opt = district.split(" ");

                   for(i=0; i<=district.length; i++){
                    var option = document.createElement("option");
                    option.value = opt[i].trim();
                    option.name = opt[i].trim();
                    option.text = opt[i].trim();
                    dropdown.add(option);

                   }
                }
                xhttp.open("GET", "district.php?region="+region, true);
                xhttp.send();
            });
        }
       

       
