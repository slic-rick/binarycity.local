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
                <a href="/contact" class="flex items-center p-2 bg-sky-50 text-xs text-sky-900 hover:bg-sky-500 hover:text-white transition rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    New Contact
                </a>
            </div>
            <div class="flex space-x-4">
                <a href="/newClient" class="flex items-center p-2 bg-sky-50 text-xs text-sky-900 hover:bg-sky-500 hover:text-white transition rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    New Client
                </a>
            </div>
        </div>


        <!-- Clients List -->
        <table class="table-auto min-w-full divide-y divide-gray-300 mt-6">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-left text-sm font-semibold text-gray-900">
                        Name
                    </th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-900">
                        Client Code
                    </th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-900">
                        No. of linked contacts
                    </th>

                    <th>Actions</th>
                </tr>
            </thead>
            <!-- Transaction Table Body -->
            <tbody class="divide-y divide-gray-200 bg-white">
                <tr>
                    <!-- Description -->
                    <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
                    <!-- Amount -->
                    <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>

                    <!-- Date -->
                    <td class="p-4 text-sm text-gray-600">Lorem Ipsum</td>
                    <!-- Actions -->
                    <td class="p-4 text-sm text-gray-600 flex justify-center space-x-2">
                        <!-- <a href="#" class="p-2 bg-amber-50 text-xs text-amber-900 hover:bg-amber-500 hover:text-white transition rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                        </svg>
                    </a> -->
                        <a href="#" class="p-2 bg-emerald-50 text-xs text-emerald-900 hover:bg-emerald-500 hover:text-white transition rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                        <form method="POST">
                            <button type="submit" class="p-2 bg-red-50 text-xs text-red-900 hover:bg-red-500 hover:text-white transition rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>

    </section>