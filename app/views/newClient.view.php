<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Clients</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/main.css" />
    <!-- Bootstrap core CSS -->
    <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>



<body class="bg-indigo-50 font-['Outfit']">

    <section class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
        <form action="/register" method="POST" class="grid grid-cols-1 gap-6">
            <!-- Name -->
            <label class="block">
                <span class="text-gray-700">Name</span>
                <input value="<?php echo $oldFormData['name'] ?? ''; ?>" name="name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Client Name" required />
            </label>

            <!-- Client Code -->
            <label class="block">
                <span class="text-gray-700">Client Code</span>
                <input value="<?php echo $generatedClientCode ?? ''; ?>" name="clientCode" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Auto-generated" readonly />
            </label>

            <button type="submit" class="block w-full py-2 bg-indigo-600 text-white rounded">
                Submit
            </button>
        </form>
    </section>