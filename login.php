<!DOCTYPE html>
<html>
  <head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Panduan Code</title>
    <style>
        body {
          background-image: url(KUE KERING/p1.jpg);
          background-repeat: no-repeat;
          background-size: cover;
        }
        @media screen and (max-width: 300px) {
            #formlogin {
          width: 290px;
            }
        }

        @media (min-width: 800px) {
            #formlogin {
          width: 370px;
            }
        }

        #formlogin {
          background-color: #b47517;
          height: auto;
          box-shadow: 0 7px 16px 0 rgba(50,50,50,0.2);
          border-radius: 0px;
          margin-top: 115px;
        }
        #formlogin form {
          margin-top: 25px;
          float: left;
          padding: 25px;
        }
      
        #formlogin .inputtext {
          width: 90%;
          margin-top: 1px;
          height: 50px;
          border: 0px;
          border-bottom: 1px solid #524304;
          font-size: 16px;
          font-family: OpenSans-Light;
          background: transparent;
        }
      
        #formlogin .tombol {
          margin-top: 40px;
          width: 45%;
          height: 40px;
          background: #6b7c08;
          border: none;
          color: black;
          font-family: product sans;
          font-size: 20px;
          border-radius: 5px;
          box-shadow: 0 7px 16px 0 rgba(172, 201, 127, 0.2);
        }
      
        #formlogin h1 {
          text-align: center;
          padding-top: 25px;
          color: #0a0501;
          font-family: Product Sans;
        }
      
        #formlogin .copyright {
            padding-bottom: 20px;
        }        
      </style>
</head>
<body> <center>
  <div id="formlogin">
    <div class="row"><font face="serif">
 <h1><center><b>ADMIN AURA COOKIES</b></center></h1>
          <form action="proses-login.php" method="POST"></div>
            <table class="table table-hover">
              <tr>
                <td><h4>USERNAME</h4>
                <input type="text" name="username" class="form-control input-md" placeholder="Isikan Username anda" required>
                </td>
              </tr>
              <tr>
                <td><h4>Password</h4>
                <input type="password" name="password" class="form-control input-md" placeholder="Isikan Password" required>
                </td>
              </tr></div></table>
              <tr>
                <td>
                <input type="submit" value="Login" class="btn btn-md btn-info"> <input type="reset" value="Batal" class="btn btn-md btn-danger">
                
                <a href="index.php" class="btn btn-md btn-warning">Kembali</a></td>
              </tr>
            </table>
          </form>
        </div>
      </div></div>
      </div></div></div><br><br><br><br><br><br>
  </div><!-- Akhir FOOTER -->
    <script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
  <script type="text/javascript">
    <$(document).ready(function(){
      $('#dataTables').DataTables();
    });
  </script>
  
</body>
</html>
