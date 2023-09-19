<?php include 'inc/header.php'; ?>

<?php
// $feedback = [
//   [
//     'id' => '1',
//     'name' => 'Beth Williams',
//     'email' => 'beth@gmail.com',
//     'body' => 'Traversy Media is ok.'
//   ],
//   [
//     'id' => '2',
//     'name' => 'Harry James',
//     'email' => 'harry@gmail.com',
//     'body' => 'Hi there everyone.'
//   ],
//   [
//     'id' => '3',
//     'name' => 'Steph Williams',
//     'email' => 'steph@gmail.com',
//     'body' => 'Traversy Media is ok.'
//   ]
//   ];

//ściąganie danych z bazy danych

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>

    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

    <!-- //ustawienie tyle kart, ile jest w $feedback - array -->
    <?php foreach($feedback as $item): ?>

    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis! -->
       <!-- zmianiamy tekst na dane pobrane z aray -->
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
       </div>
     </div>
   </div>
   <?php endforeach; ?>


   <?php include 'inc/footer.php'; ?>