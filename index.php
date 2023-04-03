<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>My Blog - Home</title>
</head>

<body class="bg-gray-100">
  <?php include 'header.php' ?>

  <main>
    <!-- Featured Post -->
    <section class="container mx-auto px-2 py-4">
      <div class="bg-white rounded-md shadow-md p-4">
        <h2 class="text-2xl font-bold mb-3">Featured Post Title</h2>
        <img src="img/img1.jpg" alt="Featured Post Image" class="w-full h-[500px]  object-cover rounded-md mb-3">
        <p>Featured post excerpt...</p>
      </div>
    </section>

    <!-- More Cards -->
    <section class="container mx-auto px-2 py-4">
      <div class="flex flex-wrap gap-2 justify-center items-center">
        <!-- Card 1 -->
        <div class="bg-white rounded-md shadow-md p-4 w-full md:w-1/3">
          <h2 class="text-xl font-bold mb-3">lorem ipsum</h2>
          <img src="img/img2.jpg" alt="Card 1 Image" class="w-full h-64 object-cover rounded-md mb-3">
          <p>Card 1 content...</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-md shadow-md p-4 w-full md:w-1/3">
          <h2 class="text-xl font-bold mb-3">lorem ipsum</h2>
          <img src="img/img1.jpg" alt="Card 2 Image" class="w-full h-64 object-cover rounded-md mb-3">
          <p>Card 2 content...</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-md shadow-md p-4 w-full md:w-1/3">
          <h2 class="text-xl font-bold mb-3">lorem ipsum</h2>
          <img src="img/img2.jpg" alt="Card 3 Image" class="w-full h-64 object-cover rounded-md mb-3">
          <p>Card 3 content...</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-md shadow-md p-4 w-full md:w-1/3">
          <h2 class="text-xl font-bold mb-3">lorem ipsum</h2>
          <img src="img/img2.jpg" alt="Card 4 Image" class="w-full h-64 object-cover rounded-md mb-3">
          <p>Card 4 content...</p>
        </div>

        
      </div>
    </section>
  </main>

  <?php include 'footer.php' ?>
</body>

</html>