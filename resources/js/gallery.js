// gallery.js
const CanvasGallery = () => {
    const [selectedIndex, setSelectedIndex] = React.useState(0);
    const [isFullscreen, setIsFullscreen] = React.useState(false);

    // Replace these with your image paths
    const images = [
        { src: '/path/to/your/image1.jpg', alt: 'Image 1' },
        { src: '/path/to/your/image2.jpg', alt: 'Image 2' },
        { src: '/path/to/your/image3.jpg', alt: 'Image 3' }
    ];

    const handlePrevious = () => {
        setSelectedIndex(prev => prev === 0 ? images.length - 1 : prev - 1);
    };

    const handleNext = () => {
        setSelectedIndex(prev => prev === images.length - 1 ? 0 : prev + 1);
    };

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
            </div>

            {/* Thumbnails */}
            <div className="flex gap-2 overflow-x-auto pb-2">
                {images.map((image, index) => (
                    <button
                        key={index}
                        onClick={() => setSelectedIndex(index)}
                        className={\`relative w-24 aspect-[16/9] rounded-lg overflow-hidden \${
              index === selectedIndex ? 'ring-2 ring-blue-500' : 'hover:opacity-80'
            }\`}
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
  );
};

// Mount the gallery to the DOM
const rootElement = document.getElementById('gallery-root');
const root = ReactDOM.createRoot(rootElement);
root.render(<CanvasGallery />);
