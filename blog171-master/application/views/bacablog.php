<br><br><br><br>
<h2><?= $blog['judul'] ?></h2>
<p>
        <div class="wow fadeInLeft">
          <?= $blog['isi'] ?>
        <?php
          $isi = str_replace("\n","<br>",$blog['isi']);
          echo $isi;
        ?>

</p>
<?php
echo "<a href='/user/".$blog['user_ID']."'>".$blog['nama']."<a><br><br>";
?>
<?php
if(($this->session->uid)==$blog['user_ID']){
                      ?>
                      <div class="text-center" id="bt_edit">
    <a href="/blog/edit/<?= $blog['blog_ID'] ?>"
  </div> <button type="submit" >EDIT</button><a/></div><br><br>

    <div class="text-center" id="bt_delete">
      <a href="/blog/delete/<?= $blog['blog_ID'] ?>"
    </div> <button type="submit" >DELETE</button> <a/></div>

  <?php } ?>
