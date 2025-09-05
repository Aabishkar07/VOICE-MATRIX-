<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Loop Example</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        /* Custom styling for full-screen image popup */
        .swal2-popup {
            padding: 0 !important; /* Remove padding from the popup */
        }
        .swal2-image {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover; /* Ensure the image fits the popup */
            border-radius: 0 !important; /* Remove rounded corners */
        }
        .swal2-actions {
            margin: 0 !important; /* Adjust button alignment */
        }
    </style>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Dynamically generate image URLs from server-side data
            const imageUrls = [
                @foreach($popup as $popup)
                    "{{ asset('uploads/' . $popup->image) }}",
                @endforeach
            ];

            // Determine the popup width based on screen size
            const screenWidth = window.innerWidth;
            let popupWidth = '59%';

            if (screenWidth <= 768) {
                popupWidth = '90%';
            }

            // Initialize the current popup index
            let currentPopup = 0;

            // Function to show the next popup
            function showPopup() {
                if (currentPopup >= imageUrls.length) {
                    return; // Stop if all images have been shown
                }

                Swal.fire({
                    imageUrl: imageUrls[currentPopup],
                    imageWidth: '100%', /* Make image width 100% */
                    imageHeight: '100%', /* Make image height 100% */
                    confirmButtonText: "Next",
                    confirmButtonColor: '#000000', /* Background color for the Next button */
                    imageAlt: "Popup Image",
                    showCloseButton: true, /* Show the default close button */
                    width: popupWidth,
                    customClass: {
                        popup: 'swal2-popup', /* Apply custom popup styling */
                        image: 'swal2-image', /* Apply custom image styling */
                        actions: 'swal2-actions' /* Adjust actions layout */
                    }
                }).then(() => {
                    currentPopup++;
                    showPopup(); // Show the next popup
                });
            }

            // Start showing popups
            if (imageUrls.length > 0) {
                showPopup();
            } else {
                console.error("No images to display in popups.");
            }
        });
    </script>
</body>
</html>
