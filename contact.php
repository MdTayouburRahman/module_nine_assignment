<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Blog - Contact</title>
</head>

<body class="bg-gray-100">
    <!-- Header and Footer are the same as in index.html -->
    <?php include 'header.php' ?>

    <!-- Contact Page -->
    <section class="container mx-auto px-4 py-6">
        <form action="contact.php" method="post" class="bg-white rounded-md shadow-md p-4">
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-lg font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="w-full px-2 py-1 rounded-md border border-gray-300" placeholder="Enter your name">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-lg font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="w-full px-2 py-1 rounded-md border border-gray-300" placeholder="Enter your email">
            </div>

            <!-- Subject -->
            <div class="mb-4">
                <label for="subject" class="block text-lg font-bold mb-2">Subject:</label>
                <input type="text" name="subject" id="subject" class="w-full px-2 py-1 rounded-md border border-gray-300" placeholder="Enter the subject">
            </div>

            <!-- Message -->
            <div class="mb-4">
                <label for="message" class="block text-lg font-bold mb-2">Message:</label>
                <textarea name="message" id="message" rows="5" class="w-full px-2 py-1 rounded-md border border-gray-300" placeholder="Type your message here"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Send Message</button>
        </form>
    </section>


    <?php
    $massage = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Process the data and send an email (not included in this example)
        $success = true; // Set to false if there's an error sending the email

        if ($success) {
            $massage = <<< 'HTML'

        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
          <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
              <p class="font-bold">Thank you</p>
              <p class="text-sm">Thank you for contacting us. We will get back to you shortly.</p>
            </div>
          </div>
        </div>
        
        HTML;
        } else {
            $massage = <<< 'HTML'

        <div class="bg-orange-100 border-l-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
          <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
              <p class="font-bold">error</p>
              <p class="text-sm">There was an error sending your message. Please try again.</p>
            </div>
          </div>
        </div>
        
        HTML;
        }
        echo $massage;
    }
    ?>
    </section>

    <?php include 'footer.php' ?>

</body>

</html>