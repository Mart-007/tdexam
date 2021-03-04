<!DOCTYPE html>
<html>
  <head>
    <title> Simple Chessboard </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" charset="utf-8"></script>
    <style>

      * {
        margin: 0;
        padding: 0;
      }

      table {
        border-collapse: collapse;
        border-spacing: 0;
      }

      #chessboard {
        padding: 0px;
        margin: 0 auto;
        border: 2px solid #181818;
      }

      #chessboard tr td {
        width: 60px;
        height: 60px;
      }

      #chessboard tr:nth-child(2n) td:nth-child(2n+1) {
        background: #9f9f9f;
      }

      #chessboard tr:nth-child(2n+1) td:nth-child(2n) {
        background: #9f9f9f;
      }

    </style>
  </head>
  <body>

    <table id='chessboard'>
      <?php
        $space = 1;
        for ($r = 0; $r < 8; $r++) {
            $col = "";
            for ($c = 0; $c < 8; $c++) {
                $col .= "<td data-pos='$space'></td>";
                $space++;

            }

            echo "<tr>" . $col . "</tr>";

        }
      ?>

    </table>

  </body>
</html>
