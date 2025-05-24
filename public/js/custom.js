$(document).ready(function () {
    // Load navbar and footer
    $("#navbar-container").load("navbar.html", function () {
        // Execute navbar script after loading
        $("#mobile-menu-button").on("click", function () {
            $("#mobile-menu").toggleClass("hidden");
        });

        // Navbar scroll effect
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 10) {
                $("#navbar")
                    .addClass("bg-white/90 backdrop-blur-sm shadow-sm")
                    .removeClass("bg-transparent");
            } else {
                $("#navbar")
                    .removeClass("bg-white/90 backdrop-blur-sm shadow-sm")
                    .addClass("bg-transparent");
            }
        });
    });

    $("#footer-container").load("footer.html");

    // Featured posts slider (auto-slide without user controls)
    var activeIndex = 0;
    var totalSlides = 4; // Make sure this matches the total number of slides

    function updateSlider() {
        // Prevent the slider from going blank by keeping it within bounds
        if (activeIndex >= totalSlides) {
            activeIndex = 0; // Loop back to the first slide
        }
        if (activeIndex < 0) {
            activeIndex = totalSlides - 1; // Loop to the last slide
        }
        $("#slider-container").css(
            "transform",
            `translateX(-${activeIndex * 100}%)`
        );
    }

    // Auto-slide functionality
    setInterval(function () {
        activeIndex = (activeIndex + 1) % totalSlides; // Loop through slides
        updateSlider();
    }, 5000); // Auto-slide every 5 seconds

    // Subscribe form submission
    $("#subscribe-form").on("submit", function (e) {
        e.preventDefault();
        var emailInput = $(this).find('input[type="email"]');
        var submitButton = $(this).find('button[type="submit"]');

        // Save original button text
        var originalText = submitButton.text();
        submitButton.text("Subscribing...").prop("disabled", true);

        // Simulate an API call to subscribe
        setTimeout(function () {
            alert("Thank you for subscribing!");
            emailInput.val("");
            submitButton.text(originalText).prop("disabled", false);
        }, 1500);
    });

    // Mobile menu toggle
    $("#mobile-menu-button").click(function () {
        $("#mobile-menu").slideToggle();
    });

    // Navbar hide/show on scroll
    var lastScrollTop = 0;
    var navbar = $("#navbar");

    $(window).scroll(function () {
        var currentScroll = $(this).scrollTop();

        // Check if the user is scrolling down
        if (currentScroll > lastScrollTop) {
            navbar.css("top", "-80px"); // Adjust based on the navbar height (hides navbar)
        } else {
            navbar.css("top", "0"); // Show navbar when scrolling up
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For mobile and negative scrolling
    });
});
