#!/bin/bash

# Check if directory argument is provided
if [ $# -eq 0 ]; then
    echo "Usage: $0 <directory_path>"
    exit 1
fi

# Get the directory path from argument
dir="$1"

# Check if directory exists
if [ ! -d "$dir" ]; then
    echo "Error: Directory '$dir' does not exist"
    exit 1
fi

# Counter for numbering
count=1

# Change to the specified directory
cd "$dir" || exit 1

# Loop through all files in specified directory
for file in *; do
    # Skip if it's a directory
    if [ -f "$file" ]; then
        # Get the file extension
        ext="${file##*.}"
        # Create the new name with padding zeros (01, 02, etc)
        newname=$(printf "%02d.%s" "$count" "$ext")
        # Rename the file
        mv "$file" "$newname"
        echo "Renamed: $file -> $newname"
        # Increment counter
        ((count++))
    fi
done

echo "Finished renaming files in $dir"
