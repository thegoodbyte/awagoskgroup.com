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

        $fsPath = public_path() . $imagesPath;


        //$this->files = $this->read();
        $this->files = $this->readImages($fsPath);

       // $this->thumbs = $this->readThumbs(null, false);
        $this->thumbs = $this->readThumbs($fsPath, 'thumbs');




    }

    private function readJsonFile($jsonFilePath) {

            // Check if file exists
            if (!file_exists($jsonFilePath)) {
                return ['error' => 'JSON file not found'];
            }

            // Read the JSON file
            $jsonContent = file_get_contents($jsonFilePath);

            // Check if file reading was successful
            if ($jsonContent === false) {
                return ['error' => 'Unable to read JSON file'];
            }

            // Decode JSON to PHP array
            $data = json_decode($jsonContent, true);

            // Check if JSON decoding was successful
            if (json_last_error() !== JSON_ERROR_NONE) {
                return ['error' => 'JSON decode error: ' . json_last_error_msg()];
            }

            return $data;

    }

    private function readThumbs($directory, $thumbsDir = 'thumbs', $file = 'thumbs.json') {

        $path = $directory . DIRECTORY_SEPARATOR . $thumbsDir . DIRECTORY_SEPARATOR . $file;
        if (!file_exists($path)) {
            throw new \Exception("file $path does not exist");
        }

        $data =  $this->readJsonFile($path);


        if ( !array_key_exists( 'images', $data )) {
            throw new \Exception("Missing node images");
        }

        if ( array_key_exists( 'error', $data )) {
            throw new \Exception($data['error']);
        }
        return $data['images'];
    }


    public function readImages($directory, $file = 'images.json') : array {
        $path  = $directory . DIRECTORY_SEPARATOR . $file;
        if (!file_exists($path)) {
            throw new \Exception("file $path does not exist");
        }
        $data =  $this->readJsonFile($path);
      // TODO : add check if we have 'images' key

        if ( !isset( $data['images'] )) {
            throw new \Exception("Missing images node");
        }
        return $data['images'];
    }


    public function readDirectory($directory = null, $asArray  = true) {
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
