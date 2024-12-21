@extends('layouts.default')

{{--<div class="container-fluid no-padd">--}}
{{--    <div class="row-fluid no-padd">--}}
{{--        <div class="scol-sm-12 no-padd">--}}
{{--            --}}


{{--            <div class="gallery">--}}
{{--                <a--}}
{{--                    href="/img/projects-galleries/brooklyn/water-st/galleries/main/01.JPG"--}}
{{--                    data-caption="Image caption">--}}
{{--                    <img--}}
{{--                        src="/img/projects-galleries/brooklyn/water-st/galleries/main/thumbs/01.JPG"--}}
{{--                        width = "60"--}}
{{--                        alt="First image">--}}
{{--                </a>--}}
{{--                <a--}}
{{--                    href="/img/projects-galleries/brooklyn/water-st/galleries/main/02.JPG">--}}
{{--                    <img--}}
{{--                        src="/img/projects-galleries/brooklyn/water-st/galleries/main/thumbs/02.JPG"--}}
{{--                        width = "60"--}}
{{--                        alt="Second image">--}}
{{--                </a>--}}
{{--                <a--}}
{{--                    href="/img/projects-galleries/brooklyn/water-st/galleries/main/03.JPG">--}}
{{--                    <img--}}
{{--                        src="/img/projects-galleries/brooklyn/water-st/galleries/main/thumbs/03.JPG"--}}
{{--                        width = "100"--}}
{{--                        alt="Second image">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<!--/MAIN BODY-->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.12.0/baguetteBox.min.js" integrity="sha512-HzIuiABxntLbBS8ClRa7drXZI3cqvkAZ5DD0JCAkmRwUtykSGqzA9uItHivDhRUYnW3MMyY5xqk7qVUHOEMbMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.12.0/baguetteBox.css" integrity="sha512-VZ783G3QIpxXpg7tWpzHn+XhjsOCIxFYoSWmyipKCB41OYaB9i4brxAWuY1c8gGCSqKo7uvckzPJhYcdBZQ9gg==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.12.0/baguetteBox.js" integrity="sha512-2cw2ofcqtCIZrndkPAINr9YN+Mbqxa1D9YdWpqm7EzSiPEAWXSnO1pTW7dvkAuwEC8LIA0ZcOuQbOsDjgslfag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.12.0/baguetteBox.min.css" integrity="sha512-1hit2XBKwGtoT792KMYEhLYTk+eYYATgFqSkftn4dG8/7TA0ysVRCBIYzhe+IRd9XPi2l8pceoKlV+Oa/B+PDA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--<script>--}}
{{--    baguetteBox.run('.gallery');--}}
{{--</script>--}}



    <!-- React dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/18.2.0/umd/react-dom.production.min.js"></script>
    <!-- Babel for JSX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/7.23.5/babel.min.js"></script>
    <!-- Tailwind CSS -->
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    ```


        <div id="gallery-root"></div>
 <script>

        <antArtifact identifier="standalone-gallery" type="application/vnd.ant.code" language="javascript" title="Standalone Gallery Component">
            // gallery.js
            const CanvasGallery = () => {
            const [selectedIndex, setSelectedIndex] = React.useState(0);
            const [isFullscreen, setIsFullscreen] = React.useState(false);

            // Your images go here
            const images = [
            { src: 'path/to/your/image1.jpg', alt: 'Image 1' },
            { src: 'path/to/your/image2.jpg', alt: 'Image 2' },
            { src: 'path/to/your/image3.jpg', alt: 'Image 3' },
            // Add more images...
            ];

            const handlePrevious = () => {
            setSelectedIndex((prev) => (prev === 0 ? images.length - 1 : prev - 1));
            };

            const handleNext = () => {
            setSelectedIndex((prev) => (prev === images.length - 1 ? 0 : prev + 1));
            };

            // Handle keyboard navigation
            React.useEffect(() => {
            const handleKeyDown = (e) => {
            if (e.key === 'ArrowLeft') handlePrevious();
            if (e.key === 'ArrowRight') handleNext();
            if (e.key === 'Escape') setIsFullscreen(false);
            };

            window.addEventListener('keydown', handleKeyDown);
            return () => window.removeEventListener('keydown', handleKeyDown);
            }, []);

            return (
            <div className="max-w-6xl mx-auto p-4">
                {/* Main Canvas */}
                <div className="relative aspect-[16/9] mb-4 bg-gray-100 rounded-lg overflow-hidden">
                    <img
                        src={images[selectedIndex].src}
                        alt={images[selectedIndex].alt}
                        className="w-full h-full object-contain"
                    />

                    {/* Navigation Arrows */}
                    <button
                        onClick={handlePrevious}
                        className="absolute left-4 top-1/2 -translate-y-1/2 p-2 rounded-full bg-black/50 text-white hover:bg-black/70 transition-colors"
                    >
                        ←
                    </button>
                    <button
                        onClick={handleNext}
                        className="absolute right-4 top-1/2 -translate-y-1/2 p-2 rounded-full bg-black/50 text-white hover:bg-black/70 transition-colors"
                    >
                        →
                    </button>

                    {/* Fullscreen Button */}
                    <button
                        onClick={() => setIsFullscreen(true)}
                    className="absolute top-4 right-4 p-2 rounded-full bg-black/50 text-white hover:bg-black/70 transition-colors"
                    >
                    ⤢
                    </button>
                </div>

                {/* Thumbnails Carousel */}
                <div className="relative">
                    <div className="overflow-x-auto pb-2">
                        <div className="flex gap-2 min-w-min">
                            {images.map((image, index) => (
                            <button
                                key={index}
                                onClick={() => setSelectedIndex(index)}
                            className={'relative flex-shrink-0 w-24 aspect-[16/9] rounded-lg overflow-hidden ' +
                            (index === selectedIndex ? 'ring-2 ring-blue-500' : 'hover:opacity-80')}
                            >
                            <img
                                src={image.src}
                                alt={image.alt}
                                className="w-full h-full object-cover"
                            />
                            </button>
                            ))}
                        </div>
                    </div>
                </div>

                {/* Fullscreen Modal */}
                {isFullscreen && (
                <div className="fixed inset-0 bg-black z-50 flex items-center justify-center">
                    <button
                        onClick={() => setIsFullscreen(false)}
                    className="absolute top-4 right-4 p-2 text-white hover:text-gray-300"
                    >
                    ×
                    </button>
                    <img
                        src={images[selectedIndex].src}
                        alt={images[selectedIndex].alt}
                        className="max-w-full max-h-screen object-contain"
                    />
                    <button
                        onClick={handlePrevious}
                        className="absolute left-4 p-2 text-white hover:text-gray-300"
                    >
                        ←
                    </button>
                    <button
                        onClick={handleNext}
                        className="absolute right-4 p-2 text-white hover:text-gray-300"
                    >
                        →
                    </button>
                </div>
                )}
            </div>
            );
            };

            // Render the gallery
            const rootElement = document.getElementById('gallery-root');
            const root = ReactDOM.createRoot(rootElement);
            root.render(<CanvasGallery />);
        </antArtifact>


        4. Add this script tag just before your closing `</body>` tag:
        ```html
        <script type="text/babel" src="gallery.js"></script>
        ```

        So your complete HTML file structure should look like this:

        ```html
        <!DOCTYPE html>
        <html>
        <head>
            <title>Your Website</title>
            <!-- React dependencies -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/18.2.0/umd/react-dom.production.min.js"></script>
            <!-- Babel for JSX -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/7.23.5/babel.min.js"></script>
            <!-- Tailwind CSS -->
            <link href="https://cdn.tailwindcss.com" rel="stylesheet">
            <!-- Your existing CSS -->
            <link rel="stylesheet" href="your-styles.css">
        </head>
        <body>
        <!-- Your existing content -->

        <!-- Gallery will be rendered here -->
        <div id="gallery-root"></div>

        <!-- React gallery component -->
        <script type="text/babel" src="gallery.js"></script>

        <!-- Your existing scripts -->
        </body>
        </html>
        ```

        To customize the gallery:

        1. Replace the images in the `images` array with your own:
        ```javascript
        const images = [
        { src: 'path/to/your/image1.jpg', alt: 'Description 1' },
        { src: 'path/to/your/image2.jpg', alt: 'Description 2' },
        // Add more images...
        ];
        ```

        2. You can modify the size and layout by adjusting the Tailwind classes:
        - Change main canvas size: modify `max-w-6xl`
        - Change thumbnail size: modify `w-24`
        - Change aspect ratio: modify `aspect-[16/9]`

        Key React concepts used in this code:

        1. `useState` - Manages state for selected image and fullscreen mode:
        ```javascript
        const [selectedIndex, setSelectedIndex] = React.useState(0);
        ```

        2. `useEffect` - Handles side effects like keyboard listeners:
        ```javascript
        React.useEffect(() => {
        // Effect code...
        return () => // Cleanup code...
        }, []);
        ```

        3. Event Handlers - Functions that respond to user interactions:
        ```javascript
        const handleNext = () => {
        setSelectedIndex((prev) => (prev === images.length - 1 ? 0 : prev + 1));
        };
        ```

        4. Conditional Rendering - Shows/hides elements based on state:
        ```javascript
        {isFullscreen && (
        // Fullscreen modal content
        )}
        ```

        Would you like me to explain any of these React concepts in more detail or help you customize the gallery further?​​​​​​​​​​​​​​​​

