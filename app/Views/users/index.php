<?php
  include('../public/layout/header.php');
?>
  <h1><span class="blue"><span class="yellow">Show list users</pan></h1>
  <table class="container">
    <thead>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
        foreach($result as $key => $values){
      ?>
        <td scope="row"><?php echo $values['id']; ?></td>
        <td><?php echo $values['fullname']; ?></td>
        <td><?php echo $values['username']; ?></td>
        <td><?php echo $values['email']; ?></td>
        <td><?php echo $values['phone']; ?></td>
        <td>
          <a href="/users/edit/<?php echo $values['id']; ?>"><i class="fas fa-edit"></i></a> |
          <a href="/users/del/<?php echo $values['id']; ?>" onclick="alert('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <div class = "add-user">
    <?php
      if($current_page > 1 && $paginate > 1){
        echo '<a href="/users/index?page='.($current_page-1).'">Prev</a> | ';
      }
      for ($i = 1; $i <= $paginate; $i++){
        if ($i == $current_page){
          echo '<span>'.$i.'</span> | ';
        }
        else{
          echo '<a href="/users/index?page='.$i.'">'.$i.'</a> | ';
        }
      }
      if ($current_page < $paginate && $paginate > 1){
        echo '<a href="/users/index?page='.($current_page+1).'">Next</a> ';
      }
    ?>
  </div>
  <script defer src="/static/fontawesome/fontawesome-all.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</body>
</html>
