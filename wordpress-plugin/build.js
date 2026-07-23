import { execSync } from "child_process";
import fs from "fs";
import path from "path";

const pluginDir = process.cwd();

const pluginName = "whenisthematch-widget";
const tempDir = path.join(pluginDir, "_build", pluginName);
const distDir = path.join(pluginDir, "dist");


// Clean/create folders
fs.rmSync(path.join(pluginDir, "_build"), {
    recursive: true,
    force: true
});

fs.mkdirSync(tempDir, { recursive: true });
fs.mkdirSync(distDir, { recursive: true });


// Copy files
fs.copyFileSync(
    path.join(pluginDir, "whenisthematch-widget.php"),
    path.join(tempDir, "whenisthematch-widget.php")
);

fs.copyFileSync(
    path.join(pluginDir, "readme.txt"),
    path.join(tempDir, "readme.txt")
);

fs.cpSync(
    path.join(pluginDir, "includes"),
    path.join(tempDir, "includes"),
    { recursive: true }
);

fs.cpSync(
    path.join(pluginDir, "assets"),
    path.join(tempDir, "assets"),
    { recursive: true }
);


// Create zip
const zipPath = path.join(
    distDir,
    `${pluginName}.zip`
);

if (fs.existsSync(zipPath)) {
    fs.unlinkSync(zipPath);
}

execSync(
    `powershell Compress-Archive -Path "${tempDir}" -DestinationPath "${zipPath}"`,
    {
        stdio: "inherit"
    }
);


// Cleanup
fs.rmSync(
    path.join(pluginDir, "_build"),
    {
        recursive: true,
        force: true
    }
);


console.log(`\nCreated: ${zipPath}`);