<?php
  include('../public/layout/header.php');
?>
  <h1><span class="blue"><span class="yellow">Show list users</pan></h1>
  <table class="container">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>
        <td>Tran Thanh Thai</td>
        <td>thaitranthanh@gmail.com</td>
        <td>012345678910</td>
        <td>
          <a href="/users/edit"><i class="fas fa-edit"></i></a> |
          <a href="/users/del"><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
      <tr>
        <td scope="row">1</td>
        <td>Tran Thanh Thai</td>
        <td>thaitranthanh@gmail.com</td>
        <td>012345678910</td>
        <td>
          <a href="/users/edit"><i class="fas fa-edit"></i></a> |
          <a href="/users/del"><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
    </tbody>
  </table>
  <script defer src="/static/fontawesome/fontawesome-all.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</body>
</html>
