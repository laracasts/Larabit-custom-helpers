
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracasts: Custom Helpers</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-800 text-slate-200">
<div class="w-full h-full">

    <div class="fixed inset-0 w-fit h-fit m-auto text-center">
        <h2 class="text-4xl mb-5">Accounts for {{ mask_value($user->name, '#')  }}</h2>
        <ul>
            @foreach ($user->accounts as $account)
            <li class="p-2">
                <button class="py-2.5 px-5 me-2 mb-2 text-sm focus:outline-none rounded-lg border focus:z-10 focus:ring-4 focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600 hover:text-white hover:bg-gray-700">
                    Select {{ mask_account($account->account_number) }}
                </button>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>
