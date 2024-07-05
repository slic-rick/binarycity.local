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
    <!-- Start Header -->
    <header class="bg-indigo-900">
        <nav class="mx-auto flex container items-center justify-between py-4" aria-label="Global">
            <a href="/" class="-m-1.5 p-1.5 text-white text-2xl font-bold">Binary City</a>
            <!-- Navigation Links -->
            <div class="flex lg:gap-x-10">
                <a href="/" class="text-gray-300 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    Clients
                </a>
                <a href="/contacts" class="text-gray-300 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 6.121a3 3 0 114.243 4.243L9.8 11.798a1.5 1.5 0 01-2.122 2.122l-2.439 2.439a6.5 6.5 0 109.192 0l2.439-2.439a1.5 1.5 0 012.122-2.122l1.414-1.414a3 3 0 00-4.243-4.243L17.243 8.1a1.5 1.5 0 01-2.122 2.122L12.682 9.24a6.5 6.5 0 00-7.561-.119l-.293-.293a3 3 0 010-4.243z" />
                    </svg>
                    Contacts
                </a>
            </div>

        </nav>
    </header>


    <!-- End Header -->
    <section class="container mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
        <div class="flex items-center justify-between border-b border-gray-200 pb-4">
            <!-- <h4 class="font-medium">Transaction List</h4> -->
            <div class="flex space-x-4">
                <a href="/newContact" class="flex items-center p-2 bg-sky-50 text-xs text-sky-900 hover:bg-sky-500 hover:text-white transition rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    New Contact
                </a>
            </div>
            <!-- <div class="flex space-x-4">
                <a href="/newClient" class="flex items-center p-2 bg-sky-50 text-xs text-sky-900 hover:bg-sky-500 hover:text-white transition rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    New Client
                </a>
            </div> -->
        </div>


        <!-- Clients List -->
        <table class="table-auto min-w-full divide-y divide-gray-300 mt-6">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-left text-sm font-semibold text-gray-900">Name</th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-900">Surname</th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-900">Email</th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-900">No. of linked clients</th>
                </tr>
            </thead>
            <!-- Transaction Table Body -->
            <tbody class="divide-y divide-gray-200 bg-white">
                <?php if (empty($contacts)) { ?>
                    <tr>
                        <td colspan="4" class="p-4 text-sm text-gray-600 text-center">No contacts found!</td>
                    </tr>
                    <?php } else {
                    foreach ($contacts as $contact) { ?>
                        <tr>
                            <!-- Name -->
                            <td class="p-4 text-sm text-gray-600"><?php echo htmlspecialchars($contact['Name'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <!-- Client Code -->
                            <td class="p-4 text-sm text-gray-600"><?php echo htmlspecialchars($contact['Surname'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <!-- No. of linked contacts -->
                            <td class="p-4 text-sm text-gray-600"><?php echo htmlspecialchars($contact['Email'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <!-- Actions -->
                            <td class="p-4 text-sm text-gray-600 flex justify-center space-x-2">
                                <?php echo htmlspecialchars($contact['Number of linked'], ENT_QUOTES, 'UTF-8'); ?>
                            </td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>


    </section>