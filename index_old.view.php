<html>
<head>
  <style>
    header {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
  
</head>
<body>
  <ul>
    <!-- <?php foreach($names as $name): ?>
      <li><?= $name; ?></li>
    <?php endforeach; ?> -->

    <!-- <?php  
      foreach($names as $name) {
        echo "<li>$name</li>";
      }
    ?> -->

    <!-- <?php foreach ($person as $key => $per) : ?>
      <li><strong><?= ucwords($key) ?></strong><?=  $per  ?></li>
    
    <?php endforeach ?> -->

    <li>Name: <?= $person['name'] ?></li>
    <!-- <li>Professional: <?= $person['professional'] ? 'Yes' : 'No' ?></li> -->
    <!-- <li>
      <strong>Status</strong>
      <?php
        if($person['professional']) {
          echo '&#9989;';
        } else {
          echo 'Not professional';
        }
      ?>
    </li> -->

    <li>
      <strong>Status</strong>
      <?php if($person['professional']) : ?>
          <span class="icon">&#9989;</span> 
      <?php else : ?>
        <span class="icon">Incomplete</span>
      <?php endif; ?>
      
    </li>
  </ul>
</body>
</html>

