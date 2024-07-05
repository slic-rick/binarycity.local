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

    <!-- <section class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
        <form action="/register" method="POST" class="grid grid-cols-1 gap-6">
         
            <label class="block">
                <span class="text-gray-700">Name</span>
                <input value="<?php echo $oldFormData['name'] ?? ''; ?>" name="name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Client Name" required />
            </label>

            <label class="block">
                <span class="text-gray-700">Client Code</span>
                <input value="<?php echo $generatedClientCode ?? ''; ?>" name="clientCode" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Auto-generated" readonly />
            </label>

            <button type="submit" class="block w-full py-2 bg-indigo-600 text-white rounded">
                Submit
            </button>
        </form>
    </section> -->
    <section class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
        <form action="/newClient" method="POST" class="grid grid-cols-1 gap-6">
            <!-- Tabs -->
            <div class="tabs">
                <ul class="flex border-b">
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" href="#general">General</a>
                    </li>
                    <li class="mr-1">
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#contacts">Contacts</a>
                    </li>
                </ul>
            </div>

            <!-- General Tab -->
            <div id="general" class="tab-content">
                <!-- Display errors -->
                <?php if (!empty($errors)) : ?>
                    <div id="error-messages" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Error(s):</strong>
                        <span id="error-text" class="block sm:inline">
                            <?php echo implode('<br>', $errors); ?>
                        </span>
                    </div>
                <?php else : ?>
                    <div id="error-messages" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative hidden" role="alert">
                        <strong class="font-bold">Error(s):</strong>
                        <span id="error-text" class="block sm:inline"></span>
                    </div>
                <?php endif; ?>

                <!-- Name -->
                <label class="block">
                    <span class="text-gray-700">Name</span>
                    <input value="<?php echo $data['name'] ?? ''; ?>" id="name" name="name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Client Name" required />
                </label>
            </div>

            <!-- Contacts Tab -->
            <div id="contacts" class="tab-content hidden">
                <!-- Placeholder for contacts linking functionality -->
                <p>Link contacts to this client.</p>
                <!-- Example of a list of linked contacts -->
                <ul>
                    <li>Contact 1 <a href="#">Unlink</a></li>
                    <li>Contact 2 <a href="#">Unlink</a></li>
                    <li>Contact 3 <a href="#">Unlink</a></li>
                </ul>
            </div>

            <button type="button" id="next-button" class="block w-full py-2 bg-indigo-600 text-white rounded">
                Next
            </button>
            <button type="submit" id="submit-button" class="block w-full py-2 bg-indigo-600 text-white rounded hidden">
                Submit
            </button>
        </form>
    </section>

    <script>
        // JavaScript to handle tab switching and button functionality
        const tabs = document.querySelectorAll('.tabs a');
        const tabContents = document.querySelectorAll('.tab-content');
        const nextButton = document.getElementById('next-button');
        const submitButton = document.getElementById('submit-button');
        const errorMessages = document.getElementById('error-messages');
        const errorText = document.getElementById('error-text');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(event) {
                event.preventDefault();
                tabs.forEach(t => t.classList.remove('border-l', 'border-t', 'border-r', 'rounded-t', 'text-blue-700'));
                this.classList.add('border-l', 'border-t', 'border-r', 'rounded-t', 'text-blue-700');
                tabContents.forEach(content => content.classList.add('hidden'));
                document.querySelector(this.getAttribute('href')).classList.remove('hidden');
                if (this.getAttribute('href') === '#contacts') {
                    nextButton.classList.add('hidden');
                    submitButton.classList.remove('hidden');
                } else {
                    nextButton.classList.remove('hidden');
                    submitButton.classList.add('hidden');
                }
            });
        });

        nextButton.addEventListener('click', function() {
            // Validate the general tab before moving to the next tab
            const name = document.getElementById('name').value.trim();
            let errors = [];

            if (!name) {
                errors.push("Name is required.");
            }

            if (errors.length > 0) {
                // Display errors
                errorText.innerHTML = errors.join('<br>');
                errorMessages.classList.remove('hidden');
            } else {
                // Clear errors and move to the contacts tab
                errorMessages.classList.add('hidden');
                tabs.forEach(t => t.classList.remove('border-l', 'border-t', 'border-r', 'rounded-t', 'text-blue-700'));
                tabs[1].classList.add('border-l', 'border-t', 'border-r', 'rounded-t', 'text-blue-700');
                tabContents[0].classList.add('hidden');
                tabContents[1].classList.remove('hidden');
                nextButton.classList.add('hidden');
                submitButton.classList.remove('hidden');
            }
        });
    </script>