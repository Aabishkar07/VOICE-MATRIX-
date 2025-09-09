<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/voicefavicon.png') }}">

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {},
                screens: {
                    'xs': '320px',
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                },
            }
        }
    </script>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#050a30] via-[#0b1a4a] to-[#050a30] flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="px-6 py-6 sm:px-8 sm:py-8">
                <h1 class="text-2xl font-bold text-center mb-2" style="color:#050a30;">Welcome Back</h1>
                <p class="text-sm text-center text-gray-500 mb-6">Sign in to your admin dashboard</p>

                @if (session('error'))
                    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 text-red-700 px-4 py-2 text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 rounded-lg border border-yellow-200 bg-yellow-50 text-yellow-700 px-4 py-2 text-sm">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.store') }}" method="post" class="space-y-4">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" autocomplete="email" required
                               class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm placeholder-gray-400 focus:border-[#ff3131] focus:ring-[#ff3131]" placeholder="you@example.com">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                               class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm placeholder-gray-400 focus:border-[#ff3131] focus:ring-[#ff3131]" placeholder="********">
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                                class="w-full inline-flex items-center justify-center rounded-lg bg-[#ff3131] px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-[#ff3131] focus:ring-offset-2">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <p class="mt-6 text-center text-xs text-white/70">
            Admin Portal • Secured Access
        </p>
    </div>
</body>

</html>
