<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>

body {
        background-color: whitesmoke;
    }
</style>
<body class=" flex items-center justify-center h-screen">
    <div class="w-full max-w-lg bg-slate-200 p-8 rounded-lg shadow-md">
        <img src="./public/logo.png" class="w-20 ml-[41%]">
        <h2 class="text-2xl font-bold mb-6 text-center">Sign In</h2>
        <form action="<?=base_url('/checkUser')?>" method="Post"><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="pass" id="password" type="password" placeholder="********">
            </div>
            <div class="flex items-center justify-between">
                <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="SignIn">
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
                <a href="<?=base_url('SignUp')?>" class="text-xs">Don't have an account..? Register</a>
            </div>
        </form>
    </div>
</body>
</html>
