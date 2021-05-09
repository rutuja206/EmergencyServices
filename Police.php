<!doctype html>

<html>
<head>
<link href="index.css" rel="stylesheet" type="text/css">
<title> POLICE Control Service </title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}
#myTable tr {
  border-bottom: 1px solid #ddd;
}
#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>


</head>

<body>
<center><h1>POLICE CONTROL SERVICES</h1></center>

&nbsp 
&nbsp 
<header>

<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>

</ul>

</header>

&nbsp

&nbsp



<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search forName.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Information</th>
    <th style="width:40%;">Services</th>
  </tr>
<tr>
      
    <td><h2>Name:Hadapsar Police Station</h2>
    <h2>Address:Solapur Rd, Gadital, Hadapsar, Pune, Maharashtra 411028</h2>
    <h2>Mobile no::+912026996577</h2>
    <td><img src="images/Hadapsar Police Station.jpg" width="450" height="200" style=float:left></td>
</tr>

  <tr>
   <td><h2>Name:Wanawadi Police Station</h2>
  <h2>Address:Near Bank of India, Hadapsar Industrial Estate, Hadapsar, Pune, Maharashtra 411020</h2>
  <h2>Mobile no:2026824981</h2>
  <td> <img src="images/Wanawadi Police Station.jpg" width="450" height="200" style=float:left></td>
  </tr>
  
   <tr>
   <td><h2>Name:Tukai Darshan Police Station</h2>
  <h2>Address:16, Hadapsar - Saswad - Jejuri Rd, Gondhalenagar, Vetal Nagar, Hadapsar, Pune, Maharashtra 411028</h2>
  <td> <img src="images/Tukai Darshan Police Station.jpg" width="450" height="200" style=float:left></td>
  </tr>
  

 <tr>
   <td><h2>Name:Hadapsar Traffic Police Station</h2>
  <h2>Address:315 Solapur Rd Vaiduwadi Vaidwadi, Solapur Rd, Vaiduwadi, Hadapsar Industrial Estate, Hadapsar, Pune, Maharashtra 411028</h2>
  <h2>Mobile no:+912026877044</h2>
  <td> <img src="images/Hadapsar Traffic Police Station.jpg" width="450" height="200" style=float:left></td>
  </tr>
 
  <tr>
   <td><h2>Name:Tarawade Vasti Police Station</h2>
  <h2>Address:Hadapsar Rd, Tarawade Vasti, Undri, Pune, Maharashtra 411028</h2>
  <h2>Mobile no:+912026996577</h2>
  <td> <img src="images/Tukai Darshan Police Station.jpg" width="450" height="200" style=float:left></td>
  </tr>
 
  <tr>
   <td><h2>Name:Wanowarie Police Station Near Ramtekadi</h2>
  <h2>Address:Hadapsar Industrial Estate, Hadapsar, Pune, Maharashtra 411001</h2>
  <h2>Mobile no:+912026824981</h2>
  <td> <img src="images/Tukai Darshan Police Station.jpg" width="450" height="200" style=float:left></td>
  </tr>
  

    
<td><h2>Name:Ashok chowk police station</h2>
<h2>Address:Near police head quarters,amrapali chowk,solapur</h2>
<h2>Mobile no:02172744636</h2>
<h2>Reviews:3.9</td></h2>
<td><img src=images/ashokchowk.jpg width="450" height="200" style=float:left></td>
  </tr>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
&nbsp
&nbsp
&nbsp
&nbsp
<footer>
<h2><a href="contact.php">Contact Us</a></h2>
&nbsp
&nbsp
&nbsp
&nbsp
</footer>
</body>
</html>
