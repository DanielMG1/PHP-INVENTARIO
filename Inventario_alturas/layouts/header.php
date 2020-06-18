<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/icomoon.css">
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/table.css">
    <link rel="stylesheet" type="text/css" href="../src/css/info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.5.1.js">
    <style media="screen">
    /*Header*/
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        font-family: "Open Sans",sans-serif;
      }

      header{
        height: 90px;
        background: #004039;
      }

      .inner-width{
        max-width: 1000px;
        padding: 0 10px;
        margin: auto;
      }

      .logo{
        float: left;
        padding: 20px 0;
      }

      .logo img{
        height: 50px;
      }

      .navigation-menu{
        float: right;
        display: flex;
        align-items: center;
        min-height: 90px;
      }

      .navigation-menu a{
        margin-left: 10px;
        color: #ddd;
        text-transform: uppercase;
        font-size: 14px;
        padding: 12px 20px;
        border-radius: 4px;
        transition: .3s linear;
        text-decoration: none;
      }

      .navigation-menu a:hover{
        background: #fff;
        color: #2f3640;
        transform: scale(1.1);
      }

      .navigation-menu i{
        margin-right: 8px;
        font-size: 16px;
      }

      .home{
        color: #ff6b6b;
      }

      .about{
        color: #0abde3;
      }

      .works{
        color: #feca57;
      }

      .team{
        color: #5f27cd;
      }

      .contact{
        color: #1dd1a1;
      }

      .menu-toggle-btn{
        float: right;
        height: 90px;
        line-height: 90px !important;
        color: #fff;
        font-size: 26px;
        display: none !important;
        cursor: pointer;
      }


      @media screen and (max-width:700px) {
        .menu-toggle-btn{
          display: block !important;
        }

        .navigation-menu{
          position: fixed;
          width: 100%;
          max-width: 400px;
          background: #172b4d;
          top: 90px;
          right: 0;
          display: none;
          padding: 20px 40px;
          box-sizing: border-box;
          z-index: 9999;
        }

        .navigation-menu::before{
          content: "";
          border-left: 10px solid transparent;
          border-right: 10px solid transparent;
          border-bottom: 10px solid #172b4d;
          position: absolute;
          top: -10px;
          right: 10px;
        }

        .navigation-menu a{
          display: block;
          margin: 10px 0;
        }

        .navigation-menu.active{
          display: block;
        }
      }
        .table{
          position: relative;
          top:100px;
        }
        .bo{
          position: relative;
          left: 30px;
          top: 50px;
          padding: 5px;
        }
    </style>
  </head>
  <body>
    <header>
      <div class="inner-width">
        <a href="#" class="logo"><img src="../src/img/logo.jpg" alt=""></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a href="views/home.php"><i class="fas fa-home home"></i> Home</a>
          <a href="../index.php"><i class="fas fa-archive about"></i> Herramientas</a>
          <a href="#"><i class="fab fa-algolia works"></i> Mantinimiento</a>
          <a href="views/guide.php"><i class="fas fa-users team"></i> Guia</a>
          <a href="#"><i class="fas fa-cog contact"></i> Config</a>
        </nav>
      </div>
    </header>


    <script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
  </body>
</html>
