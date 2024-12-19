<?php
namespace App\Components;

class DirectoryImage {
    private $path  = null;
    private $files = [];
    //private $name = '';

    private $thumbsDir = 'thumbs' .DIRECTORY_SEPARATOR;

    private $thumbs = [];

    public function __construct($imagesPath) {

        //$this->name = $name;
        $this->path = $imagesPath;

        $this->files = $this->read();

        $this->thumbs = $this->readThumbs(null, false);

//        echo '<pre />';
//        print_r($this->getGalleryArray());


    }

    private function readThumbs($directory, $asArray = false) {
        if (is_null($directory)) {
            $directory = $this->path  . $this->thumbsDir;
        }
        return $this->read($directory, $asArray);
    }

    public function read($directory = null, $asArray  = true) {
        ####echo "Read called [$directory]";
        if (is_null($directory)) {
            $directory = $this->path;
        }

        $directory = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'public'. $directory;

        $files = [];


        // Check if the directory exists
        if (is_dir($directory)) {
            // Open the directory
            if ($handle = opendir($directory)) {
                //echo "Files in directory '$directory':<br>";

                // Loop through directory contents
                while (($file = readdir($handle)) !== false) {
                    $filePath = $directory . DIRECTORY_SEPARATOR . $file;

                    // Skip directories and special entries like "." and ".."
                    if (is_file($filePath) && substr($file, 0, 1) !== '.') {
                       // echo $file . "<br>";
                        if ($asArray) {
                            $files[ $file] = [];
                        } else {
                            $files[] = $file;
                        }
                    }
                }

                // Close the directory handle
                closedir($handle);



               return $files;
            } else {
                echo "Unable to open directory.";
            }
        } else {
            echo "The specified path $directory is not a directory.";
        }


    }

    public function getGalleryArray() : array {


        $array = [
           // $this->name => [
                'image_path' => $this->path,
                'images' => $this->files,
                'thumbs_dir' => $this->thumbsDir,
                'thumbs' => $this->thumbs

          //  ]
        ];
        return $array;
    }

    public function set() {

    }

    private function write() {

    }
}
