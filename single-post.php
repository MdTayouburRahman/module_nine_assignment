<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Blog - Single Post</title>
</head>

<body class="bg-gray-100">
    <?php include "header.php"; ?>

    <!-- Single Post Page -->
    <section class="container mx-auto px-4 py-6">
        <article class="bg-white rounded-md shadow-md p-4">
            <!-- Post Title -->
            <h1 class="text-3xl font-bold mb-3">Blog Post Title</h1>

            <!-- Post Image -->
            <img src="img/img2.jpg" alt="Blog Post Image" class="w-full h-[450px] object-cover rounded-md mb-3">

            <!-- Post Content -->
            <p>Full blog post content goes here...</p>

            <!-- Post Author -->
            <div class="mt-6">
                <p class="font-bold">Author: Md Tayobur Rahman</p>
            </div>

            <!-- Social Sharing Buttons -->
            <div class="mt-6">
                <p class="font-bold mb-2">Share:</p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://example.com/single-post.php" target="_blank" class="text-blue-600">Facebook</a>
                <a href="https://twitter.com/share?url=http://example.com/single-post.php&text=Check%20out%20this%20blog%20post!" target="_blank" class="text-blue-600 ml-4">Twitter</a>
            </div>
        </article>
    </section>

    <?php include "footer.php"; ?>



</body>

</html>