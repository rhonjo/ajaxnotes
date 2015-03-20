
    <?php
    
    foreach($note as $row)
    {  ?>

      <div class="box">
        <form action='/notes/delete/<?= $row['id'] ?>' method='post'>
      <input type="submit" value="delete!">
      </form 
       <form action='/notes/update/<?= $row['id'] ?>' method='post'>
          
          <textarea name='title' id="title"><?= $row['title'] ?></textarea>
          <textarea cols="25" id="desc"rows="15" wrap="hard" name='desc'><?= $row['description'] ?></textarea> 
        <!-- <input id='edit' type='submit' value='edit' class="button"> -->
       </form>
      </div>
      <?php }  ?>
