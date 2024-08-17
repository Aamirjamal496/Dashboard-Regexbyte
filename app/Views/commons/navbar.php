<script src="https://cdn.tailwindcss.com"></script>
  
<div class='flex ml-7 mt-6'>
      <img src="./public/RBlogo.jfif" class='rounded-4xl w-[3rem] ml-12' alt="RegexByte Logo">
      <h2 class='ml-[2%] mt-2 text-2xl font-bold'>Regex Byte IT Solution and Consultancy Services</h2>
    </div>
    <div class='ml-[12%] mt-2 flex justify-between'>
      <nav class='flex '>
        <a href='<?= base_url('Home');?>' class="  mr-9 mb-2 hover:text-sky-300">Home</a>
        <a href="<?= base_url('About');?>" class="mr-9 mb-2 hover:text-sky-300">About</a>
        <a href="<?= base_url("Services");?>" class="mr-9 mb-2 hover:text-sky-300">Services</a>
      </nav>
      <a href= "<?= base_url('logOut'); ?>" class=' cursor-pointer text-red-100 bg-red-500 hover:bg-red-400  mx-6  border-0 rounded-sm float-right px-3 py-2  mb-2  content-center'>Sign Out</a> 
    </div><hr>