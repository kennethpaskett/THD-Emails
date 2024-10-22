const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const inputDir = './images';  // Directory containing your images
const outputDir = './optimized-images';  // Directory where optimized images will be saved
const maxWidth = 600;  // Max width for images

// Function to create output directories recursively
const ensureDirectoryExistence = (filePath) => {
  const dirname = path.dirname(filePath);
  if (fs.existsSync(dirname)) {
    return true;
  }
  ensureDirectoryExistence(dirname);
  fs.mkdirSync(dirname);
};

// Function to recursively process all images in nested folders
const processImagesInDirectory = (dir) => {
  fs.readdir(dir, (err, files) => {
    if (err) {
      console.error('Error reading directory:', err);
      return;
    }

    files.forEach((file) => {
      const inputFilePath = path.join(dir, file);
      fs.stat(inputFilePath, (err, stats) => {
        if (err) {
          console.error('Error getting file stats:', err);
          return;
        }

        if (stats.isDirectory()) {
          // Recursively process subdirectory
          processImagesInDirectory(inputFilePath);
        } else if (/\.(jpg|jpeg|png)$/i.test(file)) {
          // Process image file
          const outputFilePath = path.join(outputDir, path.relative(inputDir, inputFilePath));
          ensureDirectoryExistence(outputFilePath);

          console.log(`Processing file: ${inputFilePath}`);

          sharp(inputFilePath)
            .metadata()
            .then((metadata) => {
              console.log(`Metadata for ${file}:`, metadata);

              // Resize image if it exceeds max width
              const resizeOptions = metadata.width > maxWidth ? { width: maxWidth } : null;

              // Process JPEG and PNG separately
              if (/\.(jpg|jpeg)$/i.test(file)) {
                sharp(inputFilePath)
                  .resize(resizeOptions)
                  .jpeg({ quality: 70 })  // Optimize JPEG
                  .toFile(outputFilePath)
                  .then(() => {
                    console.log(`Optimized and saved JPEG: ${file}`);
                  })
                  .catch((err) => {
                    console.error(`Error saving JPEG ${file}:`, err);
                  });
              } else if (/\.png$/i.test(file)) {
                sharp(inputFilePath)
                  .resize(resizeOptions)
                  .png({ compressionLevel: 7 })  // Optimize PNG
                  .toFile(outputFilePath)
                  .then(() => {
                    console.log(`Optimized and saved PNG: ${file}`);
                  })
                  .catch((err) => {
                    console.error(`Error saving PNG ${file}:`, err);
                  });
              }
            })
            .catch((err) => {
              console.error(`Error processing image ${file}:`, err);
            });
        } else {
          console.log(`Skipping non-image file: ${file}`);
        }
      });
    });
  });
};

// Start processing from the main directory
processImagesInDirectory(inputDir);
