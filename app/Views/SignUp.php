<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
        background-color: whitesmoke;
    }
</style>



<body class=" flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-slate-200 p-4 rounded-lg shadow-md">
        <img src="./public/logo.png" alt="logo" class="w-20 ml-[41%]"/>
        <h2 class="text-2xl font-bold mb-1 text-center">Signup Form</h2>
        <form action="<?= base_url("savedata"); ?>" method="post" enctype="multipart/form-data">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Name</label>
            <div class="mb-1 flex">

                <!-- <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">Name</label> -->
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="fname" type="text" placeholder="First Name">
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="lname" type="text" placeholder="Last Name">
                <!-- <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">Last Name</label> -->
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" type="email" placeholder="Email">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="pass" type="password" placeholder="Password">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phonenumber">Phone Number</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="phone" type="tel" placeholder="Phone Number">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phonenumber">Choose Image</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="img" type="file" placeholder="Image">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status</label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="createdat">Created At</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="createdat" type="date">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign Up
                </button>
                <a href="<?= base_url('SignIn') ?>" class="text-xs">Already have an account SignIn</a>
            </div>
        </form>
    </div>
</body>

</html>