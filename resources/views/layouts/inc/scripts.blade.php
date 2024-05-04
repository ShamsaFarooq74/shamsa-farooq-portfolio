<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
<script  src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/jquery-migrate.min.js') }}"></script>

<script>
  // Initialize the swiper slider
  var swiper = new Swiper('.swiper', {
    slidesPerView: 'auto', // Show as many slides as possible in the container
    spaceBetween: 30, // Adjust the space between slides as needed
    loop: true, // Enable continuous loop
    autoplay: {
      delay: 3000, // Delay between slides in milliseconds (adjust as needed)
      disableOnInteraction: false, // Allow autoplay even when the user interacts with the slider
    },
    pagination: {
      el: '.swiper-pagination', // Specify the pagination element
      clickable: true, // Enable pagination bullets to be clickable
    },
  });
</script>
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
