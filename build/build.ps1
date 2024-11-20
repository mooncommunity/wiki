$ContainerRun = $null
$BuildFormat = ""

# https://github.com/herrwinfried/myconfig/blob/windows/scripts/function.psm1#L24C1-L34C2

Function Test-CommandExists {
    Param ($command)
    $oldPreference = $ErrorActionPreference
     
    $ErrorActionPreference = "stop"
    try { if (Get-Command $command) { return $True } }
     
    Catch { return $False }
     
    Finally { $ErrorActionPreference = $oldPreference }
}

if (Test-CommandExists podman) {
    $ContainerRun = "podman"
    $BuildFormat = "--format docker"
}
elseif (Test-CommandExists docker) {
    $ContainerRun = "docker"
}
else {
    Write-Host -ForegroundColor Red "Not Found: Docker or Podman"
    Write-Host "================================================"
    exit 1
}

$Host.UI.RawUI.WindowTitle = "Build - Powershell"

& $ContainerRun build $(Write-Host $BuildFormat) -t hofmann-convert-release -f convert.Dockerfile .

& $ContainerRun run --rm -v "$(pwd)/../:/app" hofmann-convert-release sh -c "/app/build/.build"
