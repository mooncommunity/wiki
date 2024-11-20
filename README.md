# Builder

### [Static Builder](https://github.com/herrwinfried/builder/tree/static-builder)

<div style="display: flex; justify-content: space-around;">
  <img src="https://www.php.net/images/logos/new-php-logo.png" alt="PHP Logo" style="width: 100px; height: auto;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/768px-Typescript_logo_2020.svg.png" alt="TypeScript Logo" style="width: 100px; height: auto;">
  <img src="https://sass-lang.com/assets/img/styleguide/seal-color.png" alt="Sass Logo" style="width: 100px; height: auto;">
</div>

## What is the purpose of this branch?
It converts the code you write with PHP, TS, SCSS into HTML, JS, CSS.

## Requirements
- `Docker` or `Podman`
- `Powershell` or `bash`

## Install

### Windows

Go to `build` directory and build.bat double click or go to Powershell
```powershell
Start-Process powershell -ExecutionPolicy Bypass -File "/build/build.ps1"
```

### Linux/MacOS

```bash
bash
./build/build.sh
```

## Live Server

After running build.ps1/sh you can use the following commands to test.

### Windows 

Go to `build` directory and host.bat double click or go to Powershell
```powershell
Start-Process powershell -ExecutionPolicy Bypass -File "/build/host.ps1"
```
### Linux/MacOS

```bash
bash
./build/host.sh
```

## Licence

**GNU General Public License v3.0**