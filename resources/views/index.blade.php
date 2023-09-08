<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>MySoundProfile</title>
  <link rel="stylesheet" href="./bulma/css/bulma.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
</head>

<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="{{ asset('images/logo.png') }}" width="200">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="index.php">
          Home
        </a>

        <a class="navbar-item" href="feature.php">
          Feature
        </a>

      </div>

    </div>
  </nav>


  <h3 class="title m-5">お気に入りした曲一覧</h3>
    

  {{-- <?php
  $all = disp_savedSongs();
  ?> --}}
  <div class="columns">
    <table class="table is-narrow is-hoverable m-5 column is-11">
      <tr>
        <th width=10%>ID</th>
        <th width=45%>曲名</th>
        <th width=45%>アーティスト</th>
      </tr>
      {{-- <?php foreach ($all as $row) { ?>
        <tr>
          <td><?= $row["music_id"] ?></td>
          <td><?= $row["name"] ?></td>
          <td><?= $row["artist"] ?></td>
        </tr>
      <?php } ?> --}}
    </table> 


</body>