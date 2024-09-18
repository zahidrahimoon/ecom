<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="preloader fixed inset-0 w-full h-screen bg-verdigris grid place-items-center z-50 transition-opacity duration-300" data-preloader>
  <div class="circle w-12 h-12 border-4 border-white rounded-full border-t-transparent animate-spin"></div>
</div>


<script>
    window.addEventListener("load", function () {
  const preloader = document.querySelector("[data-preloader]");
  preloader.classList.add("hidden");
});

</script>
</body>
</html>
