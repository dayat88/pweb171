<h1><?= $userid['nama'] ?></h1>
<h5><?=$userid['email']?></h5>
<h3>Blog:</h3>
   <?php
   foreach ( $user as $users ) {
     ?>
     <h5><?php
     echo "<a href = '/blog/". $users['blog_ID'] ."'>" . $users['judul']."<a><br>";
     ?></h5>
     <?php
     }
     ?>
