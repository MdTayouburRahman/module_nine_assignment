<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>

<body class="bg-gray-100">

    <?php include "header.php"; ?>

    <!-- Blog Page -->
    <section class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Blog Posts -->
            <div class="md:col-span-2">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-md shadow-md p-4 mb-4">
                    <h2 class="text-2xl font-bold mb-3">Blog Post Title 1</h2>
                    <img src="img/img1.jpg" alt="Blog Post 1 Image" class="w-full h-64 object-cover rounded-md mb-3">
                    <p>Blog post 1 excerpt...</p>
                    <a href="single-post.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md mt-3">Read More</a>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-white rounded-md shadow-md p-4 mb-4">
                    <h2 class="text-2xl font-bold mb-3">Blog Post Title 2</h2>
                    <img src="img/img2.jpg" alt="Blog Post 2 Image" class="w-full h-64 object-cover rounded-md mb-3">
                    <p>Blog post 1 excerpt...</p>
                    <a href="single-post.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md mt-3">Read More</a>
                </div>


                <!-- Add more blog posts here -->
            </div>

            <!-- Sidebar -->
            <aside class="bg-white rounded-md shadow-md p-4">
                <!-- Search Bar -->
                <form action="search.php" method="get">
                    <label for="search" class="block text-lg font-bold mb-2">Search</label>
                    <input type="text" name="search" id="search" class="w-full px-2 py-1 rounded-md mb-4 border border-gray-300" placeholder="Search Here">
                    <button type="submit" class="block w-full bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                </form>

                <!-- Categories -->
                <div class="mt-6">
                    <h3 class="text-lg font-bold mb-2">Categories</h3>
                    <ul class="list-none text-2xl space-y-3">
                        <li><a href="#" class="text-blue-500">Laravel</a></li>
                        <li><a href="#" class="text-blue-500">CSS</a></li>
                        <li><a href="#" class="text-blue-500">HTML</a></li>
                        <li><a href="#" class="text-blue-500">Vue JS</a></li>
                        <li><a href="#" class="text-blue-500">JS</a></li>
                        <!-- Add more categories here -->
                    </ul>
                </div>
            </aside>
        </div>
    </section>

    <?php include "footer.php"; ?>


</body>

</html>