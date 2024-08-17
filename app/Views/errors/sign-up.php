<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    form input{
        border: 1px solid black;
        padding:3px ;
        border-radius:4px;
    }
</style>
<body>
	<div>
        <h1 class='text-center bg-slate-300 p-3  text-3xl'>SignUp Form</h1>
        <form action="" class='flex flex-col items-center mt-20'>
            <!-------------------------- Name -------------------->
            <div>
                <label for="name">Name</label>
                <input type="text" placeholder="Enter Your first name">
                <input type="text" placeholder="Enter Your last name">
            </div>
            <!------------------------- Email -------------------->
            <label for="">Email</label>
            <input type="email" placeholder="Enter Your Email">
            <!------------------------- Phone -------------------->
            <input type="number" placeholder="Enter Your phone number">
            <!------------------------- Image -------------------->
            <label for="">Choose image</label>
            <input type="file" name="" id="">
            <!------------------------ status -------------------->
            <label for="Status">Status</label>
            <input type="radio" name='Status'>
            <input type="radio" name='Status'>

            <!------------------------ Date ---------------------->
            <label for="">Created At</label>
            <input type="date">
        </form>
    </div>
</body>
</html>