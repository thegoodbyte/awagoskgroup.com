import { promises as fs } from 'fs';
import { dirname } from 'path';
import { fileURLToPath } from 'url';
import readline from 'readline';

// Get current directory when using modules
const __dirname = dirname(fileURLToPath(import.meta.url));

// Create readline interface
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

async function renameFiles() {
    try {
        // Read all files in current directory
        const files = await fs.readdir('.');

        // Filter for .JPG files and sort them
        const jpgFiles = files
            .filter(file => file.toUpperCase().endsWith('.JPG'))
            .sort();

        // Rename files with sequential numbers
        for (let i = 0; i < jpgFiles.length; i++) {
            const oldPath = jpgFiles[i];
            const newName = `${String(i + 1).padStart(3, '0')}.JPG`;

            if (oldPath === newName) {
                console.log(`Skipping ${oldPath} - already correctly named`);
                continue;
            }

            try {
                await fs.rename(oldPath, newName);
                console.log(`Renamed ${oldPath} to ${newName}`);
            } catch (err) {
                console.error(`Error renaming ${oldPath}: ${err.message}`);
            }
        }

        console.log('Renaming complete!');
    } catch (err) {
        console.error('Error reading directory:', err.message);
    } finally {
        rl.close();
    }
}

// Promisify the question
const question = (query) => new Promise((resolve) => {
    rl.question(query, resolve);
});

// Main execution
async function main() {
    console.log('This will rename all JPG files in the current directory.');
    const answer = await question('Are you sure you want to continue? (y/n): ');

    if (answer.toLowerCase() === 'y') {
        await renameFiles();
    } else {
        console.log('Operation cancelled');
        rl.close();
    }
}

main().catch(console.error);
