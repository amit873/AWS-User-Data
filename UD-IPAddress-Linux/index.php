<html>
<title> Amit Kumar Gupta DEMO </title>
<body>
  <center><p style="font-size:60px"><font color="#ff0000">This is a Amit Web Site</font></p><center>
<h1>
  <center>
    <IMG SRC="https://raw.githubusercontent.com/amit873/AWS-User-Data/master/Amit-Kumar-Gupta-Logo.png" ALT="Demo Logo"><br>
      <?php
      $eip = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
      $privip = file_get_contents('http://169.254.169.254/latest/meta-data/local-ipv4');
      $lhst = file_get_contents('http://169.254.169.254/latest/meta-data/local-hostname');
      $hst = file_get_contents('http://169.254.169.254/latest/meta-data/public-hostname');
      $region = file_get_contents('http://169.254.169.254/latest/meta-data/placement/region');
      $azone = file_get_contents('http://169.254.169.254/latest/meta-data/placement/availability-zone');
      echo "Public IP: $eip\n";
      echo "<br>";
      echo "Private IP: $privip\n";
      echo "<br>";
      echo "Local Hostname: $lhst\n";
      echo "<br>";
      echo "Public Hostname: $hst\n";
      echo "<br>";
      echo "AWS Region: $region\n";
      echo "<br>";
      echo "Availability Zone: $azone\n";
      echo "<br>";
      ?>
  </center>
</h1>
</body>
</html>
