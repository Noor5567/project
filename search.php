<script type="text/javascript">
    var http = new XMLHttpRequest();

    function searchfun(user) {
        http.open("GET", "searchfun.php?ID=" + user, true);
        http.onreadystatechange = function() {
            if (http.readyState == 4) {
                document.getElementById('informations').innerHTML = http.responseText;
            }
        }
        http.send(null);
    }
</script>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    
</head>
  <body>
    <div class="s006">
      <form>
        <fieldset>
          <legend>Write The Patient Name</legend>
          <div class="inner-form">
            <div class="input-field">
              <button class="btn-search" type="button">
                <svg xmlns="" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button>
              <input id="search" type="text" value="" placeholder="Patient Name" onkeyup="searchfun(this.value)" name="ID"/>
            </div>
          </div>
          <div id="informations"></div>
        </fieldset>
      </form>
    </div>
  </body>
</html>